<?php

namespace App\Services\Ml;

use App\Models\AppSetting;
use App\Models\IndustryInsight;
use App\Models\JobPosting;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class SkillAggregationService
{
    /**
     * Hitung persentase kemunculan tiap skill dari job_posting_skills (job yang sudah processed),
     * lalu tulis ke industry_insights HANYA jika mode = auto.
     */
    public function aggregate(): void
    {
        $totalProcessed = JobPosting::where('status', 'processed')->count();

        if ($totalProcessed === 0) {
            return;
        }

        $counts = DB::table('job_posting_skills')
            ->join('job_postings', 'job_posting_skills.job_posting_id', '=', 'job_postings.id')
            ->where('job_postings.status', 'processed')
            ->selectRaw('job_posting_skills.skill_id, count(*) as total')
            ->groupBy('job_posting_skills.skill_id')
            ->get();

        $setting = AppSetting::first();

        foreach ($counts as $row) {
            $demand = (int) round(($row->total / $totalProcessed) * 100);

            if ($setting->industry_insight_mode === 'auto') {
                IndustryInsight::updateOrCreate(
                    ['skill_id' => $row->skill_id],
                    [
                        'demand' => min($demand, 100),
                        'trend' => $this->determineTrend($row->skill_id, $demand),
                        'job_sample_size' => $totalProcessed,
                        'period' => now()->format('M Y'),
                    ]
                );
            }
            // mode manual -> lewati, industry_insights tetap pakai data input admin
        }

        $setting->update(['last_aggregated_at' => now()]);
    }

    /**
     * Bandingkan demand baru vs sebelumnya untuk tentukan trend sederhana.
     */
    protected function determineTrend(int $skillId, int $newDemand): string
    {
        $previous = IndustryInsight::where('skill_id', $skillId)->value('demand');

        if ($previous === null) {
            return 'stable';
        }

        if ($newDemand > $previous) {
            return 'up';
        }

        if ($newDemand < $previous) {
            return 'down';
        }

        return 'stable';
    }
}