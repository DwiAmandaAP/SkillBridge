<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AssessmentHistorySeeder extends Seeder
{
    public function run(): void
    {
        $amanda = User::where('email', 'amanda@mail.com')->first();

        $amanda->assessmentHistory()->create([
            'score' => 68,
            'taken_at' => now()->subDays(10),
        ]);
    }
}