<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppSetting;

class AppSettingSeeder extends Seeder
{
    public function run(): void
    {
        // Singleton — satu baris saja.
        AppSetting::updateOrCreate(['id' => 1], [
            'industry_insight_mode' => 'manual',
            'last_aggregated_at' => null,
        ]);
    }
}
