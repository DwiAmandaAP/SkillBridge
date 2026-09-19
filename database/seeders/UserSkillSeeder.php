<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSkillSeeder extends Seeder
{
    public function run(): void
    {
        $budi = User::where('email', 'budi@gmail.com')->first();

        $data = [
            'sql' => 85,
            'python' => 70,
            'excel' => 60,
            'etl' => 50,
            'docker' => 30,
        ];

        foreach ($data as $code => $level) {
            $budi->skills()->create([
                'skill_id' => Skill::where('code', $code)->value('id'),
                'level' => $level,
                'confidence' => min(100, $level + 10),
                'source' => 'scenario',
            ]);
        }
    }
}