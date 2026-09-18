<?php

namespace App\Http\Controllers;

use App\Models\AssessmentQuestion;
use App\Models\UserAchievement;
use App\Models\UserSkill;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function questions(Request $request)
    {
        $questions = AssessmentQuestion::with('skill')
            ->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $questions,
        ], 200);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'answers' => 'required|array|min:1',
            'answers.*.skill_id' => 'required|exists:skills,id',
            'answers.*.scenario_score' => 'required|numeric|min:0|max:100',
            'answers.*.confidence' => 'required|numeric|min:0|max:100',
        ]);

        $user = $request->user();

        $averageScore = collect($validated['answers'])
            ->avg('scenario_score');

        $assessment = $user->assessmentHistory()->create([
            'score' => round($averageScore),
        ]);

        foreach ($validated['answers'] as $answer) {
            UserSkill::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'skill_id' => $answer['skill_id'],
                ],
                [
                    'level' => round($answer['scenario_score']),
                    'confidence' => round($answer['confidence']),
                    'source' => 'scenario',
                ]
            );
        }

        $achievementsUnlocked = [];

        $achievement = UserAchievement::firstOrCreate([
            'user_id' => $user->id,
            'achievement_code' => 'first_assessment',
        ]);

        if ($achievement->wasRecentlyCreated) {
            $achievementsUnlocked[] = 'first_assessment';
        }

        return response()->json([
            'status' => 200,
            'message' => 'Assessment tersimpan',
            'data' => [
                'average_score' => round($averageScore),
                'achievements_unlocked' => $achievementsUnlocked,
            ],
        ], 200);
    }
}