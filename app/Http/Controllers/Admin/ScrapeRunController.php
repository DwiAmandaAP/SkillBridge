<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ScrapeRun;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Artisan;

class ScrapeRunController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $runs = ScrapeRun::orderByDesc('started_at')->get([
            'id',
            'started_at',
            'status',
            'jobs_found',
            'jobs_processed',
            'error_message',
        ]);

        return $this->success($runs);
    }

    // Trigger manual untuk kebutuhan demo.
    // Asumsi command `scrape:jobs` dibuat terpisah di modul Scraping & Data Pipeline.
    public function trigger()
    {
        $run = ScrapeRun::create([
            'started_at' => now(),
            'status' => 'partial', // placeholder, di-update jadi success/failed oleh command scraper
            'jobs_found' => 0,
            'jobs_processed' => 0,
        ]);

        // Jalankan di background kalau pakai queue, atau langsung kalau masih sinkron sementara.
        Artisan::call('scrape:jobs', ['--run-id' => $run->id]);

        return $this->success([
            'scrape_run_id' => $run->id,
        ], 'Scraping dijalankan di background', 202);
    }
}