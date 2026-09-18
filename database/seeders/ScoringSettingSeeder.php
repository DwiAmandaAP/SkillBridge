<?php

namespace Database\Seeders;

use App\Models\ScoringSetting;
use Illuminate\Database\Seeder;

class ScoringSettingSeeder extends Seeder
{
    public function run(): void
    {
        ScoringSetting::create([
            'technical_weight' => 0.40,
            'soft_weight' => 0.15,
            'portfolio_weight' => 0.20,
            'experience_weight' => 0.15,
            'assessment_weight' => 0.10,
        ]);
    }
}