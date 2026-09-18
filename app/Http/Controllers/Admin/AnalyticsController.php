<?php

namespace App\Http\Controllers;

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

        // gap_distribution butuh hasil perhitungan skill-gap per user (fitur student-facing,
        // belum ada di scope admin). Sementara dikosongkan, tinggal isi begitu service-nya siap.
        $gapDistribution = [];

        return $this->success([
            'career_distribution' => $careerDistribution,
            'gap_distribution' => $gapDistribution,
        ]);
    }
}