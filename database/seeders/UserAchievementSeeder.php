<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAchievementSeeder extends Seeder
{
    public function run(): void
    {
        $budi = User::where('email', 'budi@gmail.com')->first();

        $budi->achievements()->create([
            'achievement_code' => 'first_assessment',
            'earned_at' => '2026-08-01 10:00:00',
        ]);

        $budi->achievements()->create([
            'achievement_code' => 'onboarding_complete',
            'earned_at' => '2026-07-25 09:00:00',
        ]);
    }
}