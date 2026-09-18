<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $amanda = User::where('email', 'amanda@mail.com')->first();

        $amanda->certificates()->create([
            'title' => 'SQL for Data Analysis',
            'issuer' => 'Coursera',
            'year' => '2025',
        ]);
    }
}