<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Urutan ini penting: Skill harus ada dulu sebelum Career (career_skill
     * pivot butuh skill_id), dan sebelum SkillContent/LearningResource/
     * IndustryInsight (semua referensi skill_id).
     */
    public function run(): void
    {
        $this->call([
            SkillSeeder::class,
            CareerSeeder::class,
            SkillContentSeeder::class,
            LearningResourceSeeder::class,
            IndustryInsightSeeder::class,
            AchievementSeeder::class,
            PortfolioChecklistItemSeeder::class,
            ScoringSettingSeeder::class,
            AppSettingSeeder::class,
        ]);
    }
}
