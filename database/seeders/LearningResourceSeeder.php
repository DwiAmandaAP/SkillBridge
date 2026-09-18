<?php

namespace Database\Seeders;

use App\Models\LearningResource;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class LearningResourceSeeder extends Seeder
{
    public function run(): void
    {
        LearningResource::create([
            'skill_id' => Skill::where('code', 'sql')->value('id'),
            'title' => 'SQL for Data Analysis',
            'provider' => 'Coursera',
            'type' => 'course',
            'url' => 'https://coursera.org/sql-for-data-analysis',
        ]);

        LearningResource::create([
            'skill_id' => Skill::where('code', 'etl')->value('id'),
            'title' => 'Belajar ETL dengan Python',
            'provider' => 'Dicoding',
            'type' => 'course',
            'url' => 'https://dicoding.com/etl-python',
        ]);
    }
}
