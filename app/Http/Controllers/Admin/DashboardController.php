<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\User;
use App\Traits\ApiResponse;

class DashboardController extends Controller
{
    use ApiResponse;

    /**
     * GET Admin Dashboard
     *
     * Description: Menampilkan ringkasan dashboard admin berupa jumlah pengguna mahasiswa,
     * jumlah career, dan rata-rata readiness score.
      *
      * @group Admin - Dashboard
      * @authenticated
     */
    public function index()
    {
        $totalUsers = User::where('role', 'student')->count();
        $totalCareers = Career::count();

        // Readiness score per user idealnya dari tabel progress_history
        // (snapshot terakhir) atau service ReadinessScore.
        $avgReadinessScore = \App\Models\ProgressHistory::selectRaw(
            'AVG(readiness_score) as avg'
        )->value('avg');

        return $this->success([
            'total_users' => $totalUsers,
            'total_careers' => $totalCareers,
            'avg_readiness_score' => $avgReadinessScore
                ? round($avgReadinessScore)
                : 0,
        ]);
    }
}
