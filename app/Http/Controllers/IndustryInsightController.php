<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\IndustryInsight;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class IndustryInsightController extends Controller
{
    use ApiResponse;

    public function index()
    {
        return $this->success(
            IndustryInsight::select('skill_id', 'demand', 'trend', 'job_sample_size', 'period')->get()
        );
    }

    // Dipakai baik untuk create maupun update manual (unique per skill_id).
    // Hanya relevan saat app_settings.industry_insight_mode = 'manual'.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'demand' => 'required|integer|min:0|max:100',
            'trend' => 'required|string',
            'job_sample_size' => 'nullable|integer|min:0',
            'period' => 'nullable|string',
        ]);

        $insight = IndustryInsight::updateOrCreate(
            ['skill_id' => $validated['skill_id']],
            collect($validated)->except('skill_id')->toArray()
        );

        return $this->success([
            'skill_id' => $insight->skill_id,
            'demand' => $insight->demand,
        ], 'Data industri disimpan');
    }
}