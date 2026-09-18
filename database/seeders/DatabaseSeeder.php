<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SkillSeeder::class,
            CareerSeeder::class,
            CareerSkillSeeder::class,
            UserSeeder::class,
            UserSkillSeeder::class,
            AssessmentHistorySeeder::class,
            RoadmapSeeder::class,
            IndustryInsightSeeder::class,
            SkillContentSeeder::class,
            LearningResourceSeeder::class,
            PortfolioChecklistItemSeeder::class,
            UserPortfolioProgressSeeder::class,
            CertificateSeeder::class,
            AchievementSeeder::class,
            UserAchievementSeeder::class,
            ProgressHistorySeeder::class,
            ScoringSettingSeeder::class,
            AppSettingSeeder::class,
            JobPostingSeeder::class,
            JobPostingSkillSeeder::class,
            ScrapeRunSeeder::class,
        ]);
    }
}