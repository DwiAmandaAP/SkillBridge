<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponse;

class AnalyticsController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $careerDistribution = User::where('role', 'student')
            ->whereNotNull('target_career_id')
            ->join('careers', 'users.target_career_id', '=', 'careers.id')
            ->selectRaw('careers.name as career, count(*) as count')
            ->groupBy('careers.name')
            ->get();

        $students = User::where('role', 'student')
            ->whereNotNull('target_career_id')
            ->with([
                'skills.skill',
                'targetCareer.careerSkills.skill',
            ])
            ->get();

        $gapDistribution = [
            'critical' => 0,
            'moderate' => 0,
            'minor' => 0,
            'none' => 0,
        ];

        foreach ($students as $student) {
            foreach ($student->targetCareer->careerSkills ?? [] as $careerSkill) {
                $userSkill = $student->skills
                    ->firstWhere('skill_id', $careerSkill->skill_id);

                $userLevel = $userSkill ? $userSkill->level : 0;
                $requiredLevel = $careerSkill->required_level;

                $gapValue = $userLevel - $requiredLevel;

                if ($gapValue <= -30) {
                    $category = 'critical';
                } elseif ($gapValue <= -15) {
                    $category = 'moderate';
                } elseif ($gapValue < 0) {
                    $category = 'minor';
                } else {
                    $category = 'none';
                }

                $gapDistribution[$category]++;
            }
        }

        return $this->success([
            'career_distribution' => $careerDistribution,
            'gap_distribution' => $gapDistribution,
        ]);
    }
}