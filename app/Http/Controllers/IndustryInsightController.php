<?php

namespace App\Http\Controllers;

use App\Models\IndustryInsight;
use Illuminate\Http\Request;

class IndustryInsightController extends Controller
{
    public function index(Request $request)
    {
        $insights = IndustryInsight::with('skill')
            ->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $insights,
        ], 200);
    }

    public function trend($skill_id)
    {
        $insights = IndustryInsight::where('skill_id', $skill_id)
            ->orderBy('period')
            ->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $insights,
        ], 200);
    }
}