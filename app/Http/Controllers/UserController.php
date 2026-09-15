<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponse;

class UserController extends Controller
{
    use ApiResponse;

    // Read-only sesuai dokumen.
    public function index()
    {
        $users = User::with('targetCareer:id,name')
            ->where('role', 'student')
            ->get()
            ->map(function ($user) {
                $latestScore = $user->progressHistory()
                    ->latest('recorded_at')
                    ->value('readiness_score');

                return [
                    'id' => $user->id,
                    'full_name' => $user->full_name,
                    'target_career' => $user->targetCareer->name ?? null,
                    'readiness_score' => $latestScore ?? 0,
                ];
            });

        return $this->success($users);
    }
}