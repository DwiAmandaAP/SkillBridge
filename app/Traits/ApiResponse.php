<?php

namespace App\Traits;

trait ApiResponse
{
    protected function success($data = null, string $message = 'OK', int $status = 200)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    protected function error(string $message = 'Terjadi kesalahan', int $status = 400, $data = null)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $status);
    }
}