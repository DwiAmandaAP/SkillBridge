<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScoringSetting;

class ScoringSettingSeeder extends Seeder
{
    public function run(): void
    {
        // Singleton — satu baris saja. Total kelima bobot harus 1.0.
        ScoringSetting::updateOrCreate(['id' => 1], [
            'technical_weight' => 0.4,
            'soft_weight' => 0.15,
            'portfolio_weight' => 0.2,
            'experience_weight' => 0.15,
            'assessment_weight' => 0.1,
        ]);
    }
}
