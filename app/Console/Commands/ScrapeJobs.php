<?php

namespace App\Console\Commands;

use App\Models\Career;
use App\Models\JobPosting;
use App\Models\ScrapeRun;
use App\Models\Skill;
use App\Services\Ml\MlClient;
use App\Services\Ml\SkillAggregationService;
use App\Services\Scraping\DummyJobSource;
use App\Services\Scraping\JobScraperService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ScrapeJobs extends Command
{
    protected $signature = 'scrape:jobs {--run-id= : ID scrape_runs yang sudah dibuat sebelumnya (misal dari trigger manual admin)}';

    protected $description = 'Scrape lowongan, kirim ke ML untuk ekstraksi skill, dan agregasi hasilnya';

    protected int $batchSize = 20; // jumlah job per batch ke ML

    public function handle(JobScraperService $scraper, MlClient $ml, SkillAggregationService $aggregator)
    {
        $run = $this->option('run-id')
            ? ScrapeRun::find($this->option('run-id'))
            : null;

        $run ??= ScrapeRun::create([
            'started_at' => now(),
            'status' => 'partial',
            'jobs_found' => 0,
            'jobs_processed' => 0,
        ]);

        $this->info("Mulai scraping (scrape_run_id: {$run->id})...");

        // Keyword diambil dari nama career yang ada, supaya cakupan lowongan relevan
        // dengan career yang didukung aplikasi. Silakan sesuaikan sumber keyword-nya.
        $keywords = [
            'IT',
            'Web Developer',
            'Software Engineer',
            'Backend',
            'Fullstack',
            'AI Engineer',
            'Frontend',
            'QA',
            'DevOps',
            'Cybersecurity',
            'mobile developer',
            'UI/UX',
            'machine learning'
        ];

        $jobsFound = $scraper->scrapeAndStore($keywords);
        $this->info("Job baru tersimpan: {$jobsFound}");

        $pendingJobs = JobPosting::where('status', 'pending')->get(['id', 'description']);

        $jobsProcessed = 0;
        $mlDown = false;

        if ($pendingJobs->isEmpty()) {
            $this->info('Tidak ada job pending untuk diproses ML.');
        } elseif (! $ml->health()) {
            // Sesuai dokumen: kalau ML down, job tetap tersimpan status pending,
            // siklus scraping tidak dianggap gagal total.
            $this->warn('ML service tidak sehat, lewati langkah ekstraksi untuk siklus ini.');
            $mlDown = true;
        } else {
            foreach ($pendingJobs->chunk($this->batchSize) as $batch) {
                $payload = $batch->map(fn ($job) => [
                    'job_posting_id' => $job->id,
                    'text' => $job->description ?? '',
                ])->values()->toArray();

                $results = $ml->extractSkills($payload);

                if ($results === null) {
                    // Timeout/connection error di tengah proses -> sisa job biarkan tetap pending
                    $mlDown = true;
                    break;
                }

                $jobsProcessed += $this->storeExtractionResults($results);
            }
        }

        $aggregator->aggregate();

        $status = 'success';
        $errorMessage = null;

        if ($mlDown && $jobsProcessed > 0) {
            $status = 'partial';
            $errorMessage = 'ML service tidak merespons pada sebagian batch.';
        } elseif ($mlDown && $jobsProcessed === 0) {
            $status = 'partial'; // job tetap tersimpan (bukan failed total), sesuai catatan dokumen
            $errorMessage = 'ML service tidak dapat dihubungi, ekstraksi skill dilewati.';
        }

        $run->update([
            'finished_at' => now(),
            'status' => $status,
            'jobs_found' => $run->jobs_found + $jobsFound,
            'jobs_processed' => $run->jobs_processed + $jobsProcessed,
            'error_message' => $errorMessage,
        ]);

        $this->info("Selesai. Status: {$status}, diproses: {$jobsProcessed}");
    }

    /**
     * Simpan hasil ekstraksi dari ML ke job_posting_skills, update status job jadi processed.
     * Return jumlah job yang berhasil diupdate.
     */
    protected function storeExtractionResults(array $results): int
    {
        $count = 0;

        // Cache kode skill -> id, supaya tidak query berulang
        $skillMap = Skill::pluck('id', 'code');

        foreach ($results as $result) {
            $jobPostingId = $result['job_posting_id'] ?? null;
            $matchedCodes = $result['matched_skills'] ?? [];

            if (! $jobPostingId) {
                continue;
            }

            DB::transaction(function () use ($jobPostingId, $matchedCodes, $skillMap) {
                $skillIds = collect($matchedCodes)
                    ->map(fn ($code) => $skillMap[$code] ?? null)
                    ->filter()
                    ->values()
                    ->toArray();

                if (! empty($skillIds)) {
                    $job = JobPosting::find($jobPostingId);
                    $job->skills()->syncWithoutDetaching($skillIds);
                }

                JobPosting::where('id', $jobPostingId)->update(['status' => 'processed']);
            });

            $count++;
        }

        return $count;
    }
}