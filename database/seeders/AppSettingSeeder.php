<?php

namespace Database\Seeders;

use App\Models\AppSetting;
use Illuminate\Database\Seeder;

class AppSettingSeeder extends Seeder
{
    public function run(): void
    {
        AppSetting::create([
            'industry_insight_mode' => 'manual',
            'last_aggregated_at' => null,
        ]);
    }
}
