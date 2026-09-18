<?php

namespace Database\Seeders;

use App\Models\JobPosting;
use Illuminate\Database\Seeder;

class JobPostingSeeder extends Seeder
{
    public function run(): void
    {
        JobPosting::create([
            'source' => 'LinkedIn',
            'source_url' => 'https://linkedin.com/jobs/view/1001',
            'title' => 'Data Analyst',
            'company' => 'PT Teknologi Nusantara',
            'location' => 'Surabaya',
            'description' => 'Kami mencari Data Analyst yang menguasai SQL, Excel, dan Power BI.',
            'posted_at' => now()->subDays(3),
            'search_keyword' => 'data analyst',
            'status' => 'processed',
            'scraped_at' => now()->subDays(2),
        ]);

        JobPosting::create([
            'source' => 'Glints',
            'source_url' => 'https://glints.com/jobs/view/2001',
            'title' => 'Data Engineer',
            'company' => 'PT Data Solusi Indonesia',
            'location' => 'Jakarta',
            'description' => 'Membutuhkan Data Engineer dengan pengalaman Python, SQL, dan Docker.',
            'posted_at' => now()->subDays(1),
            'search_keyword' => 'data engineer',
            'status' => 'processed',
            'scraped_at' => now()->subDay(),
        ]);

        JobPosting::create([
            'source' => 'JobStreet',
            'source_url' => 'https://jobstreet.com/jobs/view/3001',
            'title' => 'Frontend Developer',
            'company' => 'PT Karya Digital',
            'location' => 'Remote',
            'description' => 'Mencari Frontend Developer menguasai React dan Git.',
            'posted_at' => now(),
            'search_keyword' => 'frontend developer',
            'status' => 'pending',
            'scraped_at' => now(),
        ]);
    }
}