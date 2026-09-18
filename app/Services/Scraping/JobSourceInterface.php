<?php

namespace App\Services\Scraping;

interface JobSourceInterface
{
    /**
     * Ambil daftar lowongan mentah untuk satu keyword pencarian.
     * Return array of:
     * ['source', 'source_url', 'title', 'company', 'location', 'description', 'posted_at']
     */
    public function fetch(string $keyword): array;
}