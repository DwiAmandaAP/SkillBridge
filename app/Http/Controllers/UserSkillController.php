<?php

namespace App\Http\Controllers;

use App\Models\UserSkill;
use Illuminate\Http\Request;

class UserSkillController extends Controller
{
    /**
     * GET My Skills
     *
     * Description: Mengambil seluruh skill milik pengguna yang sedang terautentikasi beserta detail skill-nya.
      *
      * @group User - Skills
      * @authenticated
     */
    public function index(Request $request)
    {
        $userSkills = UserSkill::with('skill')
            ->where('user_id', $request->user()->id)
            ->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $userSkills,
        ], 200);
    }

    /**
     * POST Save My Skill
     *
     * Description: Menambah atau memperbarui skill pengguna. Kombinasi pengguna dan skill bersifat unik.
     *
      * @group User - Skills
      * @authenticated
     * @bodyParam skill_id integer required ID skill. Example: 3
     * @bodyParam level integer required Level skill antara 0 dan 5. Example: 4
     * @bodyParam confidence integer Tingkat kepercayaan antara 0 dan 100. Example: 80
     * @bodyParam source string Sumber penilaian: self, scenario, atau github. Example: self
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'level' => 'required|integer|min:0|max:5',
            'confidence' => 'nullable|integer|min:0|max:100',
            'source' => 'sometimes|in:self,scenario,github',
        ]);

        $userSkill = UserSkill::updateOrCreate(
            [
                'user_id' => $request->user()->id,
                'skill_id' => $validated['skill_id'],
            ],
            [
                'level' => $validated['level'],
                'confidence' => $validated['confidence'] ?? null,
                'source' => $validated['source'] ?? 'self',
            ]
        );

        return response()->json([
            'status' => 200,
            'message' => 'User skill berhasil disimpan',
            'data' => $userSkill->load('skill'),
        ], 200);
    }
}