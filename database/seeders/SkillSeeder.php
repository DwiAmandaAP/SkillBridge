<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            [
                'code' => 'sql',
                'name' => 'SQL',
                'category' => 'technical',
            ],
            [
                'code' => 'python',
                'name' => 'Python',
                'category' => 'technical',
            ],
            [
                'code' => 'excel',
                'name' => 'Excel',
                'category' => 'technical',
            ],
            [
                'code' => 'statistics',
                'name' => 'Statistics',
                'category' => 'technical',
            ],
            [
                'code' => 'powerbi',
                'name' => 'Power BI',
                'category' => 'technical',
            ],
            [
                'code' => 'cloud',
                'name' => 'Cloud Computing',
                'category' => 'technical',
            ],
            [
                'code' => 'docker',
                'name' => 'Docker',
                'category' => 'technical',
            ],
            [
                'code' => 'datapipeline',
                'name' => 'Data Pipeline / ETL',
                'category' => 'technical',
            ],
            [
                'code' => 'ml',
                'name' => 'Machine Learning',
                'category' => 'technical',
            ],
            [
                'code' => 'javascript',
                'name' => 'JavaScript',
                'category' => 'technical',
            ],
            [
                'code' => 'react',
                'name' => 'React',
                'category' => 'technical',
            ],
            [
                'code' => 'uidesign',
                'name' => 'UI Design',
                'category' => 'technical',
            ],
            [
                'code' => 'figma',
                'name' => 'Figma',
                'category' => 'technical',
            ],
            [
                'code' => 'cybersecurity',
                'name' => 'Cybersecurity Fundamentals',
                'category' => 'technical',
            ],
            [
                'code' => 'networking',
                'name' => 'Networking',
                'category' => 'technical',
            ],
            [
                'code' => 'linux',
                'name' => 'Linux',
                'category' => 'technical',
            ],
            [
                'code' => 'git',
                'name' => 'Git / Version Control',
                'category' => 'technical',
            ],
            [
                'code' => 'communication',
                'name' => 'Communication',
                'category' => 'soft',
            ],
            [
                'code' => 'problemsolving',
                'name' => 'Problem Solving',
                'category' => 'soft',
            ],
            [
                'code' => 'projectmanagement',
                'name' => 'Project Management',
                'category' => 'soft',
            ],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(['code' => $skill['code']], $skill);
        }
    }
}
