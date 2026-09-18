<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use App\Models\IndustryInsight;

class IndustryInsightSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['code' => 'sql', 'demand' => 82, 'trend' => 'stable', 'job_sample_size' => 350, 'period' => '3 bulan terakhir'],
            ['code' => 'python', 'demand' => 78, 'trend' => 'up', 'job_sample_size' => 300, 'period' => '3 bulan terakhir'],
            ['code' => 'excel', 'demand' => 65, 'trend' => 'stable', 'job_sample_size' => 220, 'period' => '3 bulan terakhir'],
            ['code' => 'etl', 'demand' => 58, 'trend' => 'up', 'job_sample_size' => 150, 'period' => '3 bulan terakhir'],
            ['code' => 'react', 'demand' => 60, 'trend' => 'stable', 'job_sample_size' => 180, 'period' => '3 bulan terakhir'],
        ];

        foreach ($data as $row) {
            $skillId = Skill::where('code', $row['code'])->value('id');
            \App\Models\IndustryInsight::create([
                'skill_id' => $skillId,
                'demand' => $row['demand'],
                'trend' => $row['trend'],
                'job_sample_size' => $row['job_sample_size'],
                'period' => $row['period'],
            ]);
        }
    }
}
