<?php

namespace App\Http\Controllers;

use App\Models\UserSkill;
use Illuminate\Http\Request;

class SkillGapController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        // Cek apakah user sudah memilih target career
        if (!$user->target_career_id) {
            return response()->json([
                'status' => 422,
                'message' => 'Target career belum dipilih',
                'data' => null,
            ], 422);
        }

        // Ambil career beserta skill yang dibutuhkan
        $career = $user->targetCareer()
            ->with([
                'careerSkills.skill',
            ])
            ->first();

        if (!$career) {
            return response()->json([
                'status' => 404,
                'message' => 'Career tidak ditemukan',
                'data' => null,
            ], 404);
        }

        // Ambil skill milik user
        $userSkills = UserSkill::where('user_id', $user->id)
            ->get()
            ->keyBy('skill_id');

        $gaps = [];

        foreach ($career->careerSkills as $careerSkill) {
            $skill = $careerSkill->skill;

            $userSkill = $userSkills->get($skill->id);

            // Jika user belum punya skill tersebut, level dianggap 0
            $userLevel = $userSkill ? $userSkill->level : 0;

            $requiredLevel = $careerSkill->required_level;

            // Gap = kemampuan user - kemampuan yang dibutuhkan
            $gapValue = $userLevel - $requiredLevel;

            // Ambil demand dari industry insight
            $demand = $skill->industryInsight
                ? $skill->industryInsight->demand
                : 0;

            // Tentukan kategori gap
            if ($gapValue <= -40) {
                $category = 'critical';
            } elseif ($gapValue <= -20) {
                $category = 'moderate';
            } elseif ($gapValue < 0) {
                $category = 'minor';
            } else {
                $category = 'none';
            }

            // Tentukan priority
            if ($gapValue <= -40) {
                $priority = 'High';
            } elseif ($gapValue < 0 && $demand >= 50) {
                $priority = 'High';
            } elseif ($gapValue < 0) {
                $priority = 'Medium';
            } else {
                $priority = 'Low';
            }

            // Hanya masukkan skill yang masih memiliki gap
            if ($gapValue < 0) {
                $gaps[] = [
                    'skill_id' => $skill->id,
                    'skill_name' => $skill->name,
                    'user_level' => $userLevel,
                    'required_level' => $requiredLevel,
                    'demand' => $demand,
                    'gap_value' => $gapValue,
                    'category' => $category,
                    'priority' => $priority,
                ];
            }
        }

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => [
                'career_name' => $career->name,
                'gaps' => $gaps,
            ],
        ]);
    }
}