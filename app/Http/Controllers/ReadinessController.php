<?php

namespace App\Http\Controllers;

use App\Models\ScoringSetting;
use App\Models\UserSkill;
use Illuminate\Http\Request;

class ReadinessController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        // Ambil skill user
        $userSkills = UserSkill::with('skill')
            ->where('user_id', $user->id)
            ->get();

        // Pisahkan technical dan soft skill
        $technicalSkills = $userSkills->filter(function ($userSkill) {
            return $userSkill->skill
                && $userSkill->skill->category === 'technical';
        });

        $softSkills = $userSkills->filter(function ($userSkill) {
            return $userSkill->skill
                && $userSkill->skill->category === 'soft';
        });

        // Hitung rata-rata technical skill
        $technicalScore = $technicalSkills->count() > 0
            ? $technicalSkills->avg('level')
            : 0;

        // Hitung rata-rata soft skill
        $softScore = $softSkills->count() > 0
            ? $softSkills->avg('level')
            : 0;

        // Portfolio
        $portfolioTotal = $user->portfolioProgress()->count();

        $portfolioDone = $user->portfolioProgress()
            ->where('done', true)
            ->count();

        $portfolioScore = $portfolioTotal > 0
            ? ($portfolioDone / $portfolioTotal) * 100
            : 0;

        // Experience
        // Belum ada tabel/data experience pada dokumentasi database.
        $experienceScore = 0;

        // Assessment
        $latestAssessment = $user->assessmentHistory()
            ->latest('taken_at')
            ->first();

        $assessmentScore = $latestAssessment
            ? $latestAssessment->score
            : 0;

        // Ambil bobot dari scoring_settings
        $scoring = ScoringSetting::current();

        $technicalWeight = $scoring->technical_weight;
        $softWeight = $scoring->soft_weight;
        $portfolioWeight = $scoring->portfolio_weight;
        $experienceWeight = $scoring->experience_weight;
        $assessmentWeight = $scoring->assessment_weight;

        // Hitung overall readiness score
        $overall = (
            ($technicalScore * $technicalWeight) +
            ($softScore * $softWeight) +
            ($portfolioScore * $portfolioWeight) +
            ($experienceScore * $experienceWeight) +
            ($assessmentScore * $assessmentWeight)
        );

        // Tentukan status readiness
        if ($overall >= 80) {
            $status = 'Ready';
        } elseif ($overall >= 60) {
            $status = 'Almost Ready';
        } else {
            $status = 'Not Ready';
        }

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => [
                'overall' => round($overall, 2),
                'technical' => round($technicalScore, 2),
                'soft' => round($softScore, 2),
                'portfolio' => round($portfolioScore, 2),
                'experience' => round($experienceScore, 2),
                'assessment' => round($assessmentScore, 2),
                'status' => $status,
            ],
        ]);
    }
}