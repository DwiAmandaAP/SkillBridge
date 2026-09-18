<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        Achievement::create([
            'code' => 'first_assessment',
            'title' => 'First Assessment',
            'description' => 'Menyelesaikan skill assessment pertama.',
        ]);

        Achievement::create([
            'code' => 'onboarding_complete',
            'title' => 'Onboarding Selesai',
            'description' => 'Menyelesaikan proses onboarding.',
        ]);
    }
}