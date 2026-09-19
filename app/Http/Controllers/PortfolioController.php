<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PortfolioController extends Controller
{
    /**
     * GET Portfolio Checklist
     *
     * Description: Mengambil seluruh item checklist portfolio beserta status penyelesaian pengguna.
      *
      * @group User - Portfolio
      * @authenticated
     */
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

    /**
     * PATCH Update Portfolio Checklist
     *
     * Description: Menandai item checklist portfolio sebagai selesai atau belum selesai.
     *
      * @group User - Portfolio
      * @authenticated
     * @urlParam item_code string required Kode item checklist portfolio. Example: github_profile
     * @bodyParam done boolean required Status selesai item. Example: true
     */
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

    /**
     * POST Analyze GitHub Portfolio
     *
     * Description: Mengambil daftar repository publik dari GitHub berdasarkan username pengguna.
     *
      * @group User - Portfolio
      * @authenticated
     * @bodyParam github_username string required Username GitHub yang akan dianalisis. Example: octocat
     */
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