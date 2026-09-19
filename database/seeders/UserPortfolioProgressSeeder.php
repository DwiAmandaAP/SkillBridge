<?php

namespace Database\Seeders;

use App\Models\PortfolioChecklistItem;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserPortfolioProgressSeeder extends Seeder
{
    public function run(): void
    {
        $budi = User::where('email', 'budi@gmail.com')->first();

        $done = ['sql', 'project_basic', 'linkedin'];

        foreach ($done as $code) {
            $budi->portfolioProgress()->create([
                'checklist_item_id' => PortfolioChecklistItem::where('code', $code)->value('id'),
                'done' => true,
            ]);
        }

        $notDone = ['python', 'project_advanced', 'resume', 'github_profile'];

        foreach ($notDone as $code) {
            $budi->portfolioProgress()->create([
                'checklist_item_id' => PortfolioChecklistItem::where('code', $code)->value('id'),
                'done' => false,
            ]);
        }
    }
}