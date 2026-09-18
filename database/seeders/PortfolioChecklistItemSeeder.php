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
        ];

        foreach ($items as $item) {
            PortfolioChecklistItem::create($item);
        }
    }
}