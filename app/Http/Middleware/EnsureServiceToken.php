<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureServiceToken
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();
        $expected = config('services.ml.service_token');

        if (! $expected || $token !== $expected) {
            return response()->json([
                'status' => 401,
                'message' => 'Service token tidak valid',
                'data' => null,
            ], 401);
        }

        return $next($request);
    }
}