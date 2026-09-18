<?php

namespace Database\Seeders;

use App\Models\JobPosting;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class JobPostingSkillSeeder extends Seeder
{
    public function run(): void
    {
        $dataAnalystJob = JobPosting::where('source_url', 'https://linkedin.com/jobs/view/1001')->first();
        $dataAnalystJob->skills()->attach([
            Skill::where('code', 'sql')->value('id'),
            Skill::where('code', 'excel')->value('id'),
            Skill::where('code', 'powerbi')->value('id'),
        ]);

        $dataEngineerJob = JobPosting::where('source_url', 'https://glints.com/jobs/view/2001')->first();
        $dataEngineerJob->skills()->attach([
            Skill::where('code', 'python')->value('id'),
            Skill::where('code', 'sql')->value('id'),
            Skill::where('code', 'docker')->value('id'),
        ]);

        // Job frontend masih 'pending', belum diproses ML, jadi belum ada relasi skill.
    }
}