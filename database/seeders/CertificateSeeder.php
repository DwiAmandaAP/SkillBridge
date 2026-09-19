<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $budi = User::where('email', 'budi@gmail.com')->first();

        $budi->certificates()->create([
            'title' => 'SQL for Data Analysis',
            'issuer' => 'Coursera',
            'year' => '2025',
        ]);
    }
}