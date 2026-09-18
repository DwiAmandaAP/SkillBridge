<?php

namespace App\Services\Ml;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MlClient
{
    protected string $baseUrl;
    protected string $token;
    protected int $timeout;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('services.ml.base_url'), '/');
        $this->token = config('services.ml.service_token');
        $this->timeout = config('services.ml.timeout', 15);
    }

    /**
     * Cek kesehatan ML service sebelum trigger batch.
     * Kalau ML down, return false (bukan exception) supaya caller bisa handle dengan mudah.
     */
    public function health(): bool
    {
        try {
            $response = Http::withToken($this->token)
                ->timeout($this->timeout)
                ->get("{$this->baseUrl}/health");

            return $response->successful();
        } catch (\Throwable $e) {
            Log::warning('ML health check gagal: '.$e->getMessage());
            return false;
        }
    }

    /**
     * Kirim batch teks lowongan ke ML untuk ekstraksi skill.
     *
     * @param array $jobs [['job_posting_id' => int, 'text' => string], ...]
     * @return array|null null kalau ML tidak merespons sama sekali (timeout/connection error)
     */
    public function extractSkills(array $jobs): ?array
    {
        try {
            $response = Http::withToken($this->token)
                ->timeout($this->timeout)
                ->post("{$this->baseUrl}/extract-skills", [
                    'jobs' => $jobs,
                ]);

            if (! $response->successful()) {
                Log::warning('ML /extract-skills merespons error: '.$response->status());
                return null;
            }

            // Format: { status, message, data: { results: [...] } }
            return $response->json('data.results') ?? [];
        } catch (\Throwable $e) {
            // Sesuai catatan dokumen: timeout/connection error harus ditangani try-catch,
            // bukan cek status di body, karena body tidak ada sama sekali.
            Log::error('ML /extract-skills tidak merespons: '.$e->getMessage());
            return null;
        }
    }
}