<?php

namespace App\Services\Location;

class LocationNormalizer
{
    /**
     * Dictionary keyword (kota/kabupaten/nama daerah umum) -> nama provinsi kanonik.
     * Best-effort: hanya kota-kota besar/umum yang di-cover. Kalau lokasi tidak
     * cocok dengan keyword manapun di sini, normalize() return null.
     *
     * PENTING: urutan diperiksa dari atas ke bawah, keyword lebih spesifik
     * (kota) diletakkan sebelum keyword lebih umum untuk menghindari salah tangkap.
     */
    protected array $provinceKeywords = [
        'DKI Jakarta' => ['jakarta', 'dki jakarta'],
        'Jawa Barat' => [
            'bandung', 'bekasi', 'bogor', 'depok', 'cimahi', 'sukabumi',
            'tasikmalaya', 'cirebon', 'karawang', 'purwakarta', 'jawa barat',
        ],
        'Jawa Tengah' => [
            'semarang', 'surakarta', 'solo', 'magelang', 'pekalongan',
            'tegal', 'salatiga', 'jawa tengah',
        ],
        'Jawa Timur' => [
            'surabaya', 'malang', 'kediri', 'madiun', 'batu', 'mojokerto',
            'probolinggo', 'pasuruan', 'sidoarjo', 'gresik', 'jember',
            'tulungagung', 'jawa timur',
        ],
        'DI Yogyakarta' => ['yogyakarta', 'jogja', 'sleman', 'bantul', 'gunungkidul', 'kulon progo'],
        'Banten' => ['tangerang', 'serang', 'cilegon', 'banten'],
        'Bali' => ['denpasar', 'badung', 'gianyar', 'tabanan', 'bali'],
        'Sumatera Utara' => ['medan', 'binjai', 'pematangsiantar', 'sumatera utara', 'sumatra utara'],
        'Sumatera Barat' => ['padang', 'bukittinggi', 'sumatera barat', 'sumatra barat'],
        'Sumatera Selatan' => ['palembang', 'sumatera selatan', 'sumatra selatan'],
        'Riau' => ['pekanbaru', 'dumai', 'riau'],
        'Kepulauan Riau' => ['batam', 'tanjungpinang', 'kepulauan riau'],
        'Lampung' => ['bandar lampung', 'lampung'],
        'Kalimantan Timur' => ['balikpapan', 'samarinda', 'kalimantan timur'],
        'Kalimantan Selatan' => ['banjarmasin', 'kalimantan selatan'],
        'Kalimantan Barat' => ['pontianak', 'kalimantan barat'],
        'Sulawesi Selatan' => ['makassar', 'sulawesi selatan'],
        'Sulawesi Utara' => ['manado', 'sulawesi utara'],
    ];

    /**
     * Normalisasi teks lokasi bebas jadi nama provinsi kanonik.
     * Return null kalau tidak ada keyword yang cocok (unclassified).
     */
    public function normalize(?string $rawLocation): ?string
    {
        if (! $rawLocation) {
            return null;
        }

        $normalized = strtolower($rawLocation);

        foreach ($this->provinceKeywords as $province => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($normalized, $keyword)) {
                    return $province;
                }
            }
        }

        return null;
    }

    /**
     * Return daftar semua provinsi kanonik yang dikenal (untuk keperluan
     * validasi/dropdown filter, kalau dibutuhkan nanti).
     */
    public function knownProvinces(): array
    {
        return array_keys($this->provinceKeywords);
    }
}