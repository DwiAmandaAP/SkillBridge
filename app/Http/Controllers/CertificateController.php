<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index(Request $request)
    {
        $certificates = Certificate::where('user_id', $request->user()->id)
            ->latest()
            ->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $certificates,
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'issuer' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        $certificate = Certificate::create([
            'user_id' => $request->user()->id,
            'title' => $validated['title'],
            'issuer' => $validated['issuer'],
            'year' => $validated['year'],
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Certificate berhasil ditambahkan',
            'data' => $certificate,
        ], 200);
    }

    public function destroy(Request $request, $id)
    {
        $certificate = Certificate::where('user_id', $request->user()->id)
            ->where('id', $id)
            ->first();

        if (!$certificate) {
            return response()->json([
                'status' => 404,
                'message' => 'Certificate tidak ditemukan',
                'data' => null,
            ], 404);
        }

        $certificate->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Certificate berhasil dihapus',
            'data' => null,
        ], 200);
    }
}