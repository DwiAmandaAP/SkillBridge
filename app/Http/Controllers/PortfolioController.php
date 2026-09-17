<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $items = \App\Models\PortfolioChecklistItem::all();

        $progress = $user->portfolioProgress()
            ->get()
            ->keyBy('checklist_item_id');

        $data = $items->map(function ($item) use ($progress) {
            return [
                'code' => $item->code,
                'category' => $item->category,
                'label' => $item->label,
                'done' => isset($progress[$item->id])
                    ? (bool) $progress[$item->id]->done
                    : false,
            ];
        });

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $data,
        ], 200);
    }

    public function updateChecklist(Request $request, $item_code)
    {
            $validated = $request->validate([
                'done' => 'required|boolean',
            ]);

            $user = $request->user();

            $item = \App\Models\PortfolioChecklistItem::where('code', $item_code)->first();

            if (!$item) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Checklist portfolio tidak ditemukan',
                    'data' => null,
                ], 404);
            }

            $progress = $user->portfolioProgress()->updateOrCreate(
                [
                    'checklist_item_id' => $item->id,
                ],
                [
                    'done' => $validated['done'],
                ]
            );

            return response()->json([
                'status' => 200,
                'message' => 'Checklist portfolio berhasil diperbarui',
                'data' => [
                    'code' => $item->code,
                    'done' => (bool) $progress->done,
                ],
            ], 200);
    }

    public function githubAnalyze(Request $request)
    {
        $validated = $request->validate([
            'github_username' => 'required|string|max:255',
        ]);

        $username = $validated['github_username'];

        $response = Http::get("https://api.github.com/users/{$username}/repos");

        if ($response->failed()) {
            return response()->json([
                'status' => 404,
                'message' => 'Data GitHub tidak ditemukan',
                'data' => null,
            ], 404);
        }

        $repositories = $response->json();

        return response()->json([
            'status' => 200,
            'message' => 'Data GitHub berhasil diambil',
            'data' => [
                'github_username' => $username,
                'repository_count' => count($repositories),
                'repositories' => $repositories,
            ],
        ], 200);
    }
}