<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\LearningResource;

class LearningResourceSeeder extends Seeder
{
    public function run(): void
    {
        // Catatan: "url" belum ada di data sumber (resource ini masih judul
        // ilustratif untuk prototype). Kolom `url` di migration NOT NULL
        // (create_learning_resources_table.php belum ada ->nullable()),
        // jadi dipakai placeholder '#' dulu — TOLONG diisi link asli
        // belakangan lewat halaman admin Learning Resource Management,
        // atau tambahkan ->nullable() ke migration kalau mau kolomnya
        // boleh kosong.
        $resources = [
            [
                'code' => 'sql',
                'title' => 'SQL for Data Analysis',
                'provider' => 'Coursera',
                'type' => 'course',
            ],
            [
                'code' => 'sql',
                'title' => 'Mode SQL Tutorial',
                'provider' => 'Mode Analytics',
                'type' => 'article',
            ],
            [
                'code' => 'python',
                'title' => 'Python for Everybody',
                'provider' => 'Coursera',
                'type' => 'course',
            ],
            [
                'code' => 'python',
                'title' => 'Pandas Documentation — Getting Started',
                'provider' => 'pandas.pydata.org',
                'type' => 'doc',
            ],
            [
                'code' => 'excel',
                'title' => 'Excel Skills for Data Analytics',
                'provider' => 'Coursera',
                'type' => 'course',
            ],
            [
                'code' => 'statistics',
                'title' => 'Statistics with Python',
                'provider' => 'Coursera',
                'type' => 'course',
            ],
            [
                'code' => 'powerbi',
                'title' => 'Power BI Essential Training',
                'provider' => 'LinkedIn Learning',
                'type' => 'course',
            ],
            [
                'code' => 'cloud',
                'title' => 'AWS Cloud Practitioner Essentials',
                'provider' => 'AWS Skill Builder',
                'type' => 'course',
            ],
            [
                'code' => 'docker',
                'title' => 'Docker for Beginners',
                'provider' => 'Docker Docs',
                'type' => 'doc',
            ],
            [
                'code' => 'datapipeline',
                'title' => 'Data Engineering Zoomcamp',
                'provider' => 'DataTalksClub',
                'type' => 'course',
            ],
            [
                'code' => 'ml',
                'title' => 'Machine Learning Specialization',
                'provider' => 'Coursera (Andrew Ng)',
                'type' => 'course',
            ],
            [
                'code' => 'javascript',
                'title' => 'JavaScript.info',
                'provider' => 'javascript.info',
                'type' => 'doc',
            ],
            [
                'code' => 'react',
                'title' => 'React Official Docs — Learn React',
                'provider' => 'react.dev',
                'type' => 'doc',
            ],
            [
                'code' => 'uidesign',
                'title' => 'Laws of UX',
                'provider' => 'lawsofux.com',
                'type' => 'article',
            ],
            [
                'code' => 'figma',
                'title' => 'Figma Basics',
                'provider' => 'Figma Academy',
                'type' => 'course',
            ],
            [
                'code' => 'cybersecurity',
                'title' => 'Google Cybersecurity Certificate',
                'provider' => 'Coursera',
                'type' => 'course',
            ],
            [
                'code' => 'networking',
                'title' => 'Networking Basics',
                'provider' => 'Cisco Networking Academy',
                'type' => 'course',
            ],
            [
                'code' => 'linux',
                'title' => 'Linux Command Line Basics',
                'provider' => 'Linux Foundation',
                'type' => 'course',
            ],
            [
                'code' => 'git',
                'title' => 'Git Handbook',
                'provider' => 'GitHub Docs',
                'type' => 'doc',
            ],
            [
                'code' => 'communication',
                'title' => 'Effective Communication',
                'provider' => 'LinkedIn Learning',
                'type' => 'course',
            ],
            [
                'code' => 'problemsolving',
                'title' => 'Problem Solving Techniques',
                'provider' => 'Coursera',
                'type' => 'course',
            ],
            [
                'code' => 'projectmanagement',
                'title' => 'Project Management Basics',
                'provider' => 'Coursera',
                'type' => 'course',
            ],
        ];

        foreach ($resources as $r) {
            $skill = Skill::where('code', $r['code'])->first();
            if (!$skill) continue;
            LearningResource::firstOrCreate([
                'skill_id' => $skill->id,
                'title' => $r['title'],
            ], [
                'provider' => $r['provider'],
                'type' => $r['type'],
                'url' => '#',
            ]);
        }
    }
}
