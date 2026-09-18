<?php

namespace Database\Seeders;

use App\Models\ScrapeRun;
use Illuminate\Database\Seeder;

class ScrapeRunSeeder extends Seeder
{
    public function run(): void
    {
        ScrapeRun::create([
            'started_at' => '2026-09-14 02:00:00',
            'finished_at' => '2026-09-14 02:05:00',
            'status' => 'success',
            'jobs_found' => 180,
            'jobs_processed' => 180,
            'error_message' => null,
        ]);

        ScrapeRun::create([
            'started_at' => '2026-09-07 02:00:00',
            'finished_at' => '2026-09-07 02:04:00',
            'status' => 'partial',
            'jobs_found' => 165,
            'jobs_processed' => 140,
            'error_message' => 'ML service timeout pada beberapa batch.',
        ]);
    }
}