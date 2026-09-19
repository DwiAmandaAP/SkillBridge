<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OnboardingController extends Controller
{
    /**
     * POST Complete Onboarding
     *
     * Description: Menyimpan career tujuan, target waktu, dan skill awal pengguna, kemudian membuat
     * roadmap pertama pengguna.
     *
      * @group User - Onboarding
      * @authenticated
     * @bodyParam target_career_id integer required ID career tujuan. Example: 1
     * @bodyParam target_timeline_months integer required Target waktu belajar dalam bulan. Example: 12
     * @bodyParam skills object[] required Daftar skill awal pengguna.
     * @bodyParam skills[].skill_id integer required ID skill. Example: 3
     * @bodyParam skills[].level integer required Level skill antara 0 dan 100. Example: 40
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'target_career_id' => 'required|exists:careers,id',
            'target_timeline_months' => 'required|integer|min:1',
            'skills' => 'required|array|min:1',
            'skills.*.skill_id' => 'required|exists:skills,id',
            'skills.*.level' => 'required|integer|min:0|max:100',
        ]);

        $user = $request->user();

        $roadmap = DB::transaction(function () use ($validated, $user) {

            // Simpan target career dan timeline user
            $user->update([
                'target_career_id' => $validated['target_career_id'],
                'target_timeline_months' => $validated['target_timeline_months'],
                'onboarding_complete' => true,
            ]);

            // Simpan skill user
            foreach ($validated['skills'] as $skill) {
                $user->skills()->updateOrCreate(
                    [
                        'skill_id' => $skill['skill_id'],
                    ],
                    [
                        'level' => $skill['level'],
                        'source' => 'self',
                    ]
                );
            }

            // Buat roadmap pertama
            $roadmap = Roadmap::updateOrCreate(
                [
                    'user_id' => $user->id,
                ],
                [
                    'target_career_id' => $validated['target_career_id'],
                    'generated_at' => now(),
                ]
            );

            return $roadmap;
        });

        return response()->json([
            'status' => 200,
            'message' => 'Onboarding selesai',
            'data' => [
                'target_career_id' => $validated['target_career_id'],
                'roadmap_id' => $roadmap->id,
            ],
        ], 200);
    }
}