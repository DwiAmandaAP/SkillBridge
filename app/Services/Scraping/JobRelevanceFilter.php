<?php

namespace App\Services\Scraping;

class JobRelevanceFilter
{
    /**
     * Kata (sebagai whole word, case-insensitive) yang menandakan judul
     * KEMUNGKINAN non-IT (security guard, satpam, dst) jika berdiri sendiri.
     */
    protected array $ambiguousWords = [
        'security',
        'satpam',
        'keamanan',
        'internal',
        'auditor',
        'audit',
        'waiter',
        'waitress',
        'sales',
        'marketing',
        'trainer',
        'training',
        'tour',
        'travel',
        'komandan',
        'HRD',
        'digital marketing',
        

    ];

    /**
     * Kalau salah satu kata di atas ditemukan, tapi judul JUGA mengandung
     * salah satu kata kualifikasi berikut, maka dianggap tetap relevan (IT).
     * Contoh: "Security Engineer" → mengandung "security" + "engineer" → LOLOS.
     */
    protected array $qualifyingWords = [
        'cyber', 'cybersecurity', 'siber',
        'engineer', 'analyst', 'specialist', 'spesialis',
        'penetration', 'pentest',
        'network', 'jaringan',
        'application', 'aplikasi',
        'information', 'informasi',
        'infrastructure', 'infrastruktur',
        'soc', // security operations center
        'vulnerability', 'kerentanan',
        'incident', // incident response
        'compliance',
        'devsecops', 'operations', 'testing', 'cisco', 'operation',
        'data',
    ];

    /**
     * Kata lain yang SELALU menandakan non-IT meski tanpa security/satpam,
     * berguna untuk exclude langsung tanpa perlu cek qualifying words.
     * Tambahkan di sini kalau nanti ketemu pola noise lain (misal "kurir", "sopir").
     */
    protected array $alwaysExcludeWords = [
        'satpam',
        'petugas keamanan',
        'anggota security',
        'security guard',
        'daily worker security',
        'security L2',
        'security villa',
        'DW security',
        'security & satpam',
        'satpam gedung',
        'content creator',
        'cutomer service',
        'beautician salon',
        'account payable',
        'credit marketing',
        'tour',
        'travel',
        'marketing',
        'care officer support',
        

    ];

    public function isRelevant(string $title): bool
    {
        $normalized = strtolower($title);

        // 1. Cek frasa spesifik yang selalu non-IT (exact phrase match)
        foreach ($this->alwaysExcludeWords as $phrase) {
            if (str_contains($normalized, $phrase)) {
                return false;
            }
        }

        // 2. Cek apakah ada kata ambigu (security/keamanan) sebagai whole word
        $hasAmbiguousWord = false;
        foreach ($this->ambiguousWords as $word) {
            if ($this->containsWholeWord($normalized, $word)) {
                $hasAmbiguousWord = true;
                break;
            }
        }

        if (! $hasAmbiguousWord) {
            return true; // tidak ada kata ambigu sama sekali, aman
        }

        // 3. Ada kata ambigu → wajib ada minimal 1 kata kualifikasi teknis
        foreach ($this->qualifyingWords as $word) {
            if ($this->containsWholeWord($normalized, $word)) {
                return true; // "Security Engineer", "Cyber Security", dst → lolos
            }
        }

        // Ada kata ambigu, tapi tidak ada kualifikasi teknis → buang
        // (contoh: "Security", "Senior Security", "Security & Satpam")
        return false;
    }

    /**
     * Cek kata sebagai whole word (bukan substring), pakai word boundary regex.
     * Ini yang bikin "IT" tidak ke-trigger di kata "Quality" atau semacamnya.
     */
    protected function containsWholeWord(string $haystack, string $word): bool
    {
        $pattern = '/\b'.preg_quote($word, '/').'\b/i';

        return (bool) preg_match($pattern, $haystack);
    }

    /**
     * Filter array of job postings (hasil dari JobSourceInterface::fetch()),
     * buang yang tidak relevan.
     */
    public function filterJobs(array $jobs): array
    {
        return array_values(array_filter($jobs, function ($job) {
            return $this->isRelevant($job['title'] ?? '');
        }));
    }
}