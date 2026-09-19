<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ScoringSetting;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ScoringSettingController extends Controller
{
    use ApiResponse;

    /**
     * GET Scoring Settings
     *
     * Description: Mengambil bobot komponen yang digunakan untuk menghitung readiness score.
      *
      * @group Admin - Scoring Settings
      * @authenticated
     */
    public function show()
    {
        $setting = ScoringSetting::first();

        return $this->success([
            'technical' => (float) $setting->technical_weight,
            'soft' => (float) $setting->soft_weight,
            'portfolio' => (float) $setting->portfolio_weight,
            'experience' => (float) $setting->experience_weight,
            'assessment' => (float) $setting->assessment_weight,
        ]);
    }

    /**
     * PUT Scoring Settings
     *
     * Description: Memperbarui bobot readiness score. Total seluruh bobot wajib sama dengan 1.0.
     *
      * @group Admin - Scoring Settings
      * @authenticated
     * @bodyParam technical number required Bobot technical skill antara 0 dan 1. Example: 0.3
     * @bodyParam soft number required Bobot soft skill antara 0 dan 1. Example: 0.2
     * @bodyParam portfolio number required Bobot portfolio antara 0 dan 1. Example: 0.2
     * @bodyParam experience number required Bobot pengalaman antara 0 dan 1. Example: 0.1
     * @bodyParam assessment number required Bobot assessment antara 0 dan 1. Example: 0.2
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'technical' => 'required|numeric|min:0|max:1',
            'soft' => 'required|numeric|min:0|max:1',
            'portfolio' => 'required|numeric|min:0|max:1',
            'experience' => 'required|numeric|min:0|max:1',
            'assessment' => 'required|numeric|min:0|max:1',
        ]);

        $total = round(array_sum($validated), 2);

        if ($total != 1.0) {
            return $this->error(
                'Total bobot harus 1.0, saat ini ' . $total,
                422
            );
        }

        $setting = ScoringSetting::first();

        $setting->update([
            'technical_weight' => $validated['technical'],
            'soft_weight' => $validated['soft'],
            'portfolio_weight' => $validated['portfolio'],
            'experience_weight' => $validated['experience'],
            'assessment_weight' => $validated['assessment'],
        ]);

        return $this->success([
            'technical' => (float) $setting->technical_weight,
            'soft' => (float) $setting->soft_weight,
            'portfolio' => (float) $setting->portfolio_weight,
            'experience' => (float) $setting->experience_weight,
            'assessment' => (float) $setting->assessment_weight,
        ], 'Bobot skor diperbarui');
    }
}