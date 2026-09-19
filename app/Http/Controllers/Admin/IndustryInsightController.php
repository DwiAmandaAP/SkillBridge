<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IndustryInsight;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class IndustryInsightController extends Controller
{
    use ApiResponse;

    /**
     * GET Admin Industry Insights
     *
     * Description: Menampilkan data industry insight global yang tersimpan untuk setiap skill.
      *
      * @group Admin - Industry Insight
      * @authenticated
     */
    public function index()
    {
        return $this->success(
            IndustryInsight::select('skill_id', 'demand', 'trend', 'job_sample_size', 'period')->get()
        );
    }

    // Dipakai baik untuk create maupun update manual (unique per skill_id).
    // Hanya relevan saat app_settings.industry_insight_mode = 'manual'.
    /**
     * POST Admin Industry Insight
     *
     * Description: Membuat atau memperbarui industry insight manual untuk satu skill.
     * Endpoint ini digunakan saat mode industry insight aplikasi adalah manual.
     *
      * @group Admin - Industry Insight
      * @authenticated
     * @bodyParam skill_id integer required ID skill. Example: 3
     * @bodyParam demand integer required Persentase demand antara 0 dan 100. Example: 75
     * @bodyParam trend string required Arah tren demand. Example: up
     * @bodyParam job_sample_size integer Jumlah sampel lowongan. Example: 120
     * @bodyParam period string Periode data insight. Example: 2026-09
     */
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