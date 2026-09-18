<?php

namespace Database\Seeders;

use App\Models\PortfolioChecklistItem;
use Illuminate\Database\Seeder;

class PortfolioChecklistItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['code' => 'sql', 'category' => 'Technical Skills', 'label' => 'SQL'],
            ['code' => 'python', 'category' => 'Technical Skills', 'label' => 'Python'],
            ['code' => 'project_basic', 'category' => 'Project', 'label' => 'Punya 1 project dasar'],
            ['code' => 'project_advanced', 'category' => 'Project', 'label' => 'Punya 1 project tingkat lanjut'],
            ['code' => 'resume', 'category' => 'Professional Branding', 'label' => 'Resume siap pakai'],
            ['code' => 'linkedin', 'category' => 'Professional Branding', 'label' => 'Profil LinkedIn aktif'],
            ['code' => 'github_profile', 'category' => 'Professional Branding', 'label' => 'Profil GitHub rapi'],
            [
                'code' => 'project_basic',
                'category' => 'Portfolio',
                'label' => '1 proyek yang sudah selesai',
            ],
            [
                'code' => 'project_realworld',
                'category' => 'Portfolio',
                'label' => 'Proyek end-to-end / real-world',
            ],
            [
                'code' => 'github_docs',
                'category' => 'Portfolio',
                'label' => 'Dokumentasi GitHub yang rapi',
            ],
            [
                'code' => 'internship',
                'category' => 'Experience',
                'label' => 'Pengalaman magang',
            ],
            [
                'code' => 'open_source',
                'category' => 'Experience',
                'label' => 'Kontribusi open source',
            ],
            [
                'code' => 'cv',
                'category' => 'Career Documents',
                'label' => 'CV',
            ],
            [
                'code' => 'portfolio_site',
                'category' => 'Career Documents',
                'label' => 'Website portofolio',
            ],
        ];

        foreach ($items as $item) {
            PortfolioChecklistItem::updateOrCreate(['code' => $item['code']], $item);
        }
    }
}
