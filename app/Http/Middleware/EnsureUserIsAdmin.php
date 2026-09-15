<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (! $request->user() || $request->user()->role !== 'admin') {
            return response()->json([
                'status' => 403,
                'message' => 'Akses ditolak, hanya untuk admin',
                'data' => null,
            ], 403);
        }

        return $next($request);
    }
}