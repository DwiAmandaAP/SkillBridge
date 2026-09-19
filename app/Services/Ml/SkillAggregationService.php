<?php

namespace App\Services\Ml;

use App\Models\AppSetting;
use App\Models\IndustryInsight;
use App\Models\IndustryInsightHistory;
use App\Models\IndustryInsightRegionHistory;
use App\Models\JobPosting;
use Illuminate\Support\Facades\DB;

class SkillAggregationService
{
    public function aggregate(): void
    {
        $this->aggregateGlobal();
        $this->aggregateByRegion();
    }

    protected function aggregateGlobal(): void
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
        $period = now()->format('M Y');

        foreach ($counts as $row) {
            $demand = min((int) round(($row->total / $totalProcessed) * 100), 100);
            $trend = $this->determineTrend(
                IndustryInsight::where('skill_id', $row->skill_id)->value('demand'),
                $demand
            );

            if ($setting->industry_insight_mode === 'auto') {
                IndustryInsight::updateOrCreate(
                    ['skill_id' => $row->skill_id],
                    [
                        'demand' => $demand,
                        'trend' => $trend,
                        'job_sample_size' => $totalProcessed,
                        'period' => $period,
                    ]
                );
            }

            IndustryInsightHistory::create([
                'skill_id' => $row->skill_id,
                'demand' => $demand,
                'trend' => $trend,
                'job_sample_size' => $totalProcessed,
                'period' => $period,
                'recorded_at' => now(),
            ]);
        }

        $setting->update(['last_aggregated_at' => now()]);
    }

    /**
     * Agregasi terpisah per region (provinsi kanonik). Job posting yang
     * region-nya null (tidak terklasifikasi LocationNormalizer) diabaikan
     * di sini -- tidak masuk hitungan region manapun.
     */
    protected function aggregateByRegion(): void
    {
        $regions = JobPosting::where('status', 'processed')
            ->whereNotNull('region')
            ->distinct()
            ->pluck('region');

        $period = now()->format('M Y');

        foreach ($regions as $region) {
            $totalInRegion = JobPosting::where('status', 'processed')
                ->where('region', $region)
                ->count();

            if ($totalInRegion === 0) {
                continue;
            }

            $counts = DB::table('job_posting_skills')
                ->join('job_postings', 'job_posting_skills.job_posting_id', '=', 'job_postings.id')
                ->where('job_postings.status', 'processed')
                ->where('job_postings.region', $region)
                ->selectRaw('job_posting_skills.skill_id, count(*) as total')
                ->groupBy('job_posting_skills.skill_id')
                ->get();

            foreach ($counts as $row) {
                $demand = min((int) round(($row->total / $totalInRegion) * 100), 100);

                $previousDemand = IndustryInsightRegionHistory::where('skill_id', $row->skill_id)
                    ->where('region', $region)
                    ->orderByDesc('recorded_at')
                    ->value('demand');

                $trend = $this->determineTrend($previousDemand, $demand);

                IndustryInsightRegionHistory::create([
                    'skill_id' => $row->skill_id,
                    'region' => $region,
                    'demand' => $demand,
                    'trend' => $trend,
                    'job_sample_size' => $totalInRegion,
                    'period' => $period,
                    'recorded_at' => now(),
                ]);
            }
        }
    }

    protected function determineTrend(?int $previousDemand, int $newDemand): string
    {
        if ($previousDemand === null) {
            return 'stable';
        }

        if ($newDemand > $previousDemand) {
            return 'up';
        }

        if ($newDemand < $previousDemand) {
            return 'down';
        }

        return 'stable';
    }
}