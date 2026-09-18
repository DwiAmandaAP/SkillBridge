<?php

namespace App\Http\Controllers;

use App\Models\UserAchievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index(Request $request)
    {
        $achievements = UserAchievement::with('achievement')
            ->where('user_id', $request->user()->id)
            ->orderBy('earned_at', 'desc')
            ->get()
            ->map(function ($item) {
                return [
                    'code' => $item->achievement->code,
                    'title' => $item->achievement->title,
                    'description' => $item->achievement->description,
                    'earned_at' => $item->earned_at->format('Y-m-d'),
                ];
            });

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $achievements,
        ], 200);
    }
}

