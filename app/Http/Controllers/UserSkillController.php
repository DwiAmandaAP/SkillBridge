<?php

namespace App\Http\Controllers;

use App\Models\UserSkill;
use Illuminate\Http\Request;

class UserSkillController extends Controller
{
    public function index(Request $request)
    {
        $userSkills = UserSkill::with('skill')
            ->where('user_id', $request->user()->id)
            ->get();

        return response()->json([
            'status' => 'success',
            'message' => 'User skills retrieved successfully',
            'data' => [
                'skills' => $userSkills,
            ],
        ]);
    }

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
            'status' => 'success',
            'message' => 'User skill saved successfully',
            'data' => [
                'skill' => $userSkill->load('skill'),
            ],
        ], 201);
    }
}