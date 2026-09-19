<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ProgressHistorySeeder extends Seeder
{
    public function run(): void
    {
        $budi = User::where('email', 'budi@gmail.com')->first();

        $budi->progressHistory()->create([
            'readiness_score' => 61,
            'skill_snapshot' => ['python' => 70, 'sql' => 85],
            'recorded_at' => '2026-08-01 00:00:00',
        ]);

        $budi->progressHistory()->create([
            'readiness_score' => 68,
            'skill_snapshot' => ['python' => 70, 'sql' => 85, 'data_pipeline_etl' => 50],
            'recorded_at' => now(),
        ]);
    }
}