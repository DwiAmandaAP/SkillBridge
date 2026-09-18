<?php

namespace App\Http\Controllers;

use App\Models\AssessmentQuestion;
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
            'answers' => 'required|array',
            'answers.*.skill_id' => 'required|exists:skills,id',
            'answers.*.scenario_score' => 'required|numeric|min:0|max:100',
            'answers.*.confidence' => 'required|numeric|min:0|max:100',
        ]);

        $user = $request->user();

        $score = collect($validated['answers'])
            ->avg('scenario_score');

        $assessment = $user->assessmentHistory()->create([
            'score' => round($score),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Assessment berhasil dikirim',
            'data' => [
                'score' => $assessment->score,
                'taken_at' => $assessment->taken_at,
            ],
        ], 200);
    }
}