<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ScoringSetting;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ScoringSettingController extends Controller
{
    use ApiResponse;

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
            return $this->error('Total bobot harus 1.0, saat ini '.$total, 422);
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