<?php

namespace App\Http\Controllers;

use App\Models\RoleDemandHistory;
use App\Services\Location\LocationNormalizer;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class RoleInsightController extends Controller
{
    use ApiResponse;

    /**
     * GET Role Insights
     *
     * Description: Menampilkan persentase demand tiap role berdasarkan hasil scraping lowongan.
     * Tanpa region, data yang ditampilkan bersifat global seluruh Indonesia. Dengan region,
     * data yang ditampilkan adalah snapshot terbaru per role untuk provinsi tersebut.
     *
      * @group Industry Insight
      * @unauthenticated
     * @queryParam region string Nama provinsi atau kota yang ingin difilter. Example: Jawa Timur
     */
    public function index(Request $request, LocationNormalizer $normalizer)
    {
        $rawRegion = $request->query('region');
        $region = $rawRegion ? $normalizer->normalize($rawRegion) : null;

        if ($rawRegion && ! $region) {
            return $this->success([], "Region '{$rawRegion}' tidak dikenali");
        }

        $latestIds = RoleDemandHistory::where('region', $region)
            ->selectRaw('MAX(id) as id')
            ->groupBy('role')
            ->pluck('id');

        $insights = RoleDemandHistory::whereIn('id', $latestIds)
            ->orderByDesc('job_count')
            ->get()
            ->map(fn ($row) => [
                'role' => $row->role,
                'job_count' => $row->job_count,
                'total_jobs' => $row->total_jobs,
                'percentage' => $row->percentage,
                'trend' => $row->trend,
                'period' => $row->period,
                'region' => $row->region,
            ]);

        return $this->success($insights);
    }

    /**
        * GET Role Insight Trend
        *
        * Description: Menampilkan riwayat jumlah lowongan dan persentase demand untuk suatu role.
        *
        * Tanpa region, riwayat yang ditampilkan bersifat global. Dengan region, riwayat dibatasi
        * pada provinsi tersebut.
        *
      * @group Industry Insight
      * @unauthenticated
        * @urlParam role string required Nama role yang ingin dilihat trennya. Example: Frontend Developer
        * @queryParam region string Nama provinsi atau kota yang ingin difilter. Example: Jawa Timur
     */
    public function trend(Request $request, string $role, LocationNormalizer $normalizer)
    {
        $rawRegion = $request->query('region');
        $region = $rawRegion ? $normalizer->normalize($rawRegion) : null;

        if ($rawRegion && ! $region) {
            return $this->success([], "Region '{$rawRegion}' tidak dikenali");
        }

        $history = RoleDemandHistory::where('role', $role)
            ->where('region', $region)
            ->orderBy('recorded_at')
            ->get(['period', 'job_count', 'percentage'])
            ->map(fn ($row) => [
                'month' => $row->period,
                'job_count' => $row->job_count,
                'percentage' => $row->percentage,
            ]);

        return $this->success($history);
    }
}