<?php
namespace App\Http\Controllers;

use App\Models\ProgressHistory;
use Illuminate\Http\Request;

class ProgressHistoryController extends Controller
{
    public function index(Request $request)
    {
        $history = ProgressHistory::where('user_id', $request->user()->id)
            ->orderBy('recorded_at', 'desc')
            ->get()
            ->map(function ($item) {
                return [
                    'date' => $item->recorded_at->format('Y-m-d'),
                    'readiness_score' => $item->readiness_score,
                    'skill_snapshot' => $item->skill_snapshot,
                ];
            });

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $history,
        ], 200);
    }
}
