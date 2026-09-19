<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ApiResponse;

    /**
     * PATCH Update Industry Insight Mode
     *
     * Description: Mengubah mode sumber industry insight antara otomatis dari pipeline scraping
     * dan manual dari input admin.
     *
      * @group Admin - Settings
      * @authenticated
     * @bodyParam mode string required Mode insight: auto atau manual. Example: auto
     */
    public function updateIndustryInsightMode(Request $request)
    {
        $validated = $request->validate([
            'mode' => 'required|in:auto,manual',
        ]);

        $setting = AppSetting::first();

        $setting->update([
            'industry_insight_mode' => $validated['mode'],
        ]);

        return $this->success([
            'industry_insight_mode' => $setting->industry_insight_mode,
        ], 'Mode industry insight diperbarui');
    }
}