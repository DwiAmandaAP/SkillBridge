<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoadmapSeeder extends Seeder
{
    public function run(): void
    {
        $amanda = User::where('email', 'amanda@mail.com')->first();
        $dataEngineer = Career::where('slug', 'data-engineer')->first();

        $roadmap = $amanda->roadmap()->create([
            'target_career_id' => $dataEngineer->id,
            'generated_at' => now()->subDays(10),
        ]);

        $phases = [
            [
                'skill' => 'data_pipeline_etl',
                'title' => 'Belajar Data Pipeline / ETL',
                'priority' => 'High',
                'status' => 'not_started',
                'learning_objective' => 'Memahami konsep ETL dan membangun pipeline sederhana.',
                'why' => 'Skill ini punya gap terbesar terhadap target career.',
                'after_text' => 'Kamu bisa membangun pipeline data end-to-end.',
                'resources' => ['https://example.com/etl-course'],
                'tasks' => ['Pelajari konsep ETL', 'Buat pipeline sederhana dengan Python'],
                'mini_project' => 'Buat pipeline ETL dari CSV ke database.',
                'duration_days' => 13,
                'sort_order' => 1,
            ],
            [
                'skill' => 'docker',
                'title' => 'Dasar Docker untuk Data Engineering',
                'priority' => 'Medium',
                'status' => 'not_started',
                'learning_objective' => 'Memahami containerization untuk deployment pipeline.',
                'why' => 'Dibutuhkan untuk deployment pipeline production.',
                'after_text' => 'Kamu bisa membuat image Docker untuk aplikasi data.',
                'resources' => ['https://example.com/docker-basics'],
                'tasks' => ['Install Docker', 'Buat Dockerfile sederhana'],
                'mini_project' => 'Containerize pipeline ETL yang sudah dibuat.',
                'duration_days' => 7,
                'sort_order' => 2,
            ],
        ];

        foreach ($phases as $phase) {
            $roadmap->phases()->create([
                'skill_id' => Skill::where('code', $phase['skill'])->value('id'),
                'title' => $phase['title'],
                'priority' => $phase['priority'],
                'status' => $phase['status'],
                'learning_objective' => $phase['learning_objective'],
                'why' => $phase['why'],
                'after_text' => $phase['after_text'],
                'resources' => $phase['resources'],
                'tasks' => $phase['tasks'],
                'mini_project' => $phase['mini_project'],
                'duration_days' => $phase['duration_days'],
                'sort_order' => $phase['sort_order'],
            ]);
        }
    }
}