<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioChecklistItem;

class PortfolioChecklistItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
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
