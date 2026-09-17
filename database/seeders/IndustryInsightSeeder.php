<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\IndustryInsight;

class IndustryInsightSeeder extends Seeder
{
    public function run(): void
    {
        $insights = [
            [
                'code' => 'sql',
                'demand' => 82,
                'trend' => 'stable',
                'job_sample_size' => 350,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'python',
                'demand' => 74,
                'trend' => 'up',
                'job_sample_size' => 330,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'problemsolving',
                'demand' => 77,
                'trend' => 'stable',
                'job_sample_size' => 315,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'communication',
                'demand' => 71,
                'trend' => 'stable',
                'job_sample_size' => 325,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'javascript',
                'demand' => 68,
                'trend' => 'stable',
                'job_sample_size' => 310,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'git',
                'demand' => 66,
                'trend' => 'up',
                'job_sample_size' => 270,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'cloud',
                'demand' => 61,
                'trend' => 'up',
                'job_sample_size' => 255,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'excel',
                'demand' => 60,
                'trend' => 'stable',
                'job_sample_size' => 245,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'datapipeline',
                'demand' => 58,
                'trend' => 'up',
                'job_sample_size' => 255,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'statistics',
                'demand' => 55,
                'trend' => 'stable',
                'job_sample_size' => 235,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'ml',
                'demand' => 52,
                'trend' => 'up',
                'job_sample_size' => 220,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'cybersecurity',
                'demand' => 49,
                'trend' => 'up',
                'job_sample_size' => 210,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'powerbi',
                'demand' => 47,
                'trend' => 'stable',
                'job_sample_size' => 180,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'docker',
                'demand' => 45,
                'trend' => 'up',
                'job_sample_size' => 205,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'uidesign',
                'demand' => 44,
                'trend' => 'stable',
                'job_sample_size' => 185,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'projectmanagement',
                'demand' => 40,
                'trend' => 'stable',
                'job_sample_size' => 165,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'react',
                'demand' => 39,
                'trend' => 'up',
                'job_sample_size' => 155,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'networking',
                'demand' => 36,
                'trend' => 'down',
                'job_sample_size' => 150,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'linux',
                'demand' => 34,
                'trend' => 'stable',
                'job_sample_size' => 125,
                'period' => '3 bulan terakhir',
            ],
            [
                'code' => 'figma',
                'demand' => 33,
                'trend' => 'stable',
                'job_sample_size' => 160,
                'period' => '3 bulan terakhir',
            ],
        ];

        foreach ($insights as $i) {
            $skill = Skill::where('code', $i['code'])->first();
            if (!$skill) continue;
            IndustryInsight::updateOrCreate(
                ['skill_id' => $skill->id],
                [
                    'demand' => $i['demand'],
                    'trend' => $i['trend'],
                    'job_sample_size' => $i['job_sample_size'],
                    'period' => $i['period'],
                ]
            );
        }
    }
}
