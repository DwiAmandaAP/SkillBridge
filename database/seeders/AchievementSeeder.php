<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        $achievements = [
            [
                'code' => 'first_assessment',
                'title' => 'First Assessment',
                'description' => 'Menyelesaikan skill assessment pertama.',
            ],
            [
                'code' => 'first_roadmap',
                'title' => 'Roadmap Dimulai',
                'description' => 'Memulai learning roadmap pertama.',
            ],
            [
                'code' => 'first_module_done',
                'title' => 'Skill Builder',
                'description' => 'Menyelesaikan modul roadmap pertama.',
            ],
            [
                'code' => 'roadmap_completed',
                'title' => 'Roadmap Completed',
                'description' => 'Menyelesaikan seluruh fase roadmap.',
            ],
            [
                'code' => 'portfolio_ready',
                'title' => 'Portfolio Ready',
                'description' => 'Portfolio Readiness Score mencapai 80% atau lebih.',
            ],
        ];

        foreach ($achievements as $a) {
            Achievement::updateOrCreate(['code' => $a['code']], $a);
        }
    }
}
