<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $dataEngineer = Career::where('slug', 'data-engineer')->first();

        User::create([
            'full_name' => 'Amanda',
            'email' => 'amanda@mail.com',
            'password' => Hash::make('password'),
            'role' => 'student',
            'university' => 'Universitas Airlangga',
            'major' => 'Sistem Informasi',
            'semester' => 6,
            'graduation_year' => 2027,
            'target_career_id' => $dataEngineer->id,
            'target_timeline_months' => 6,
            'github_username' => 'amanda-dev',
            'onboarding_complete' => true,
        ]);

        User::create([
            'full_name' => 'Admin SkillBridge',
            'email' => 'admin@skillbridge.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'onboarding_complete' => true,
        ]);
    }
}