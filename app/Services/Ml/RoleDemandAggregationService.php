<?php

namespace App\Services\Ml;

use App\Models\JobPosting;
use App\Models\RoleDemandHistory;
use App\Services\Classification\JobRoleClassifier;

class RoleDemandAggregationService
{
    public function aggregate(): void
    {
        $period = now()->format('M Y');

        $this->aggregateForRegion(null, $period);

        $regions = JobPosting::where('status', 'processed')
            ->whereNotNull('region')
            ->distinct()
            ->pluck('region');

        foreach ($regions as $region) {
            $this->aggregateForRegion($region, $period);
        }
    }

    protected function aggregateForRegion(?string $region, string $period): void
    {
        $query = JobPosting::where('status', 'processed')
            ->whereNotNull('role_category');

        if ($region !== null) {
            $query->where('region', $region);
        }

        $totalJobs = (clone $query)->count();

        if ($totalJobs === 0) {
            return;
        }

        $counts = (clone $query)
            ->selectRaw('role_category, count(*) as total')
            ->groupBy('role_category')
            ->pluck('total', 'role_category');

        foreach ($counts as $role => $count) {
            $percentage = min((int) round(($count / $totalJobs) * 100), 100);

            $previousCount = RoleDemandHistory::where('role', $role)
                ->where('region', $region)
                ->orderByDesc('recorded_at')
                ->value('job_count');

            $trend = $this->determineTrend($previousCount, $count);

            RoleDemandHistory::create([
                'role' => $role,
                'region' => $region,
                'job_count' => $count,
                'total_jobs' => $totalJobs,
                'percentage' => $percentage,
                'trend' => $trend,
                'period' => $period,
                'recorded_at' => now(),
            ]);
        }
    }

    protected function determineTrend(?int $previousCount, int $newCount): string
    {
        if ($previousCount === null) {
            return 'stable';
        }

        if ($newCount > $previousCount) {
            return 'up';
        }

        if ($newCount < $previousCount) {
            return 'down';
        }

        return 'stable';
    }
}