<?php

namespace App\Http\Controllers;

use App\Models\IndustryInsight;
use App\Models\IndustryInsightHistory;
use App\Models\IndustryInsightRegionHistory;
use App\Models\Skill;
use App\Services\Location\LocationNormalizer;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class IndustryInsightController extends Controller
{
    use ApiResponse;

    /**
     * GET Industry Insights
     *
     * Description: Menampilkan persentase demand tiap skill berdasarkan hasil scraping lowongan.
     * 
     * Tanpa region, data yang ditampilkan adalah snapshot demand global seluruh Indonesia.
     * Dengan region, data yang ditampilkan adalah snapshot terbaru per skill untuk provinsi tersebut.
     *
      * @group Industry Insight
      * @unauthenticated
     * @queryParam region string Nama provinsi atau kota yang ingin difilter. Example: Jawa Timur
     */
    public function index(Request $request, LocationNormalizer $normalizer)
    {
        $rawRegion = $request->query('region');

        if (! $rawRegion) {
            $insights = IndustryInsight::with('skill:id,code,name')
                ->get()
                ->map(fn ($insight) => [
                    'skill_id' => $insight->skill_id,
                    'skill_code' => $insight->skill->code ?? null,
                    'skill_name' => $insight->skill->name ?? null,
                    'demand' => $insight->demand,
                    'trend' => $insight->trend,
                    'job_sample_size' => $insight->job_sample_size,
                    'period' => $insight->period,
                ]);

            return $this->success($insights);
        }

        $canonicalRegion = $normalizer->normalize($rawRegion);

        if (! $canonicalRegion) {
            return $this->success([], "Region '{$rawRegion}' tidak dikenali");
        }

        $latestIds = IndustryInsightRegionHistory::where('region', $canonicalRegion)
            ->selectRaw('MAX(id) as id')
            ->groupBy('skill_id')
            ->pluck('id');

        $insights = IndustryInsightRegionHistory::with('skill:id,name')
            ->whereIn('id', $latestIds)
            ->orderByDesc('demand')
            ->get()
            ->map(fn ($row) => [
                'skill_id' => $row->skill_id,
                'skill_code' => $row->skill->code ?? null,
                'skill_name' => $row->skill->name ?? null,
                'demand' => $row->demand,
                'trend' => $row->trend,
                'job_sample_size' => $row->job_sample_size,
                'period' => $row->period,
                'region' => $row->region,
            ]);

        return $this->success($insights);
    }

    /**
     * GET Industry Insight Trend
     *
     * Description: Menampilkan riwayat perubahan demand suatu skill berdasarkan periode.
     * Tanpa region, riwayat yang ditampilkan bersifat global. Dengan region, riwayat dibatasi
     * pada provinsi tersebut.
     *
      * @group Industry Insight
      * @unauthenticated
     * @urlParam skill_id integer required ID skill yang ingin dilihat trennya. Example: 3
     * @queryParam region string Nama provinsi atau kota yang ingin difilter. Example: Jawa Timur
     */
    public function trend(Request $request, int $skillId, LocationNormalizer $normalizer)
    {
        $skill = Skill::select('id', 'code', 'name')->find($skillId);

        if (! $skill) {
            return $this->error('Skill tidak ditemukan', 404);
        }

        $rawRegion = $request->query('region');

        if (! $rawRegion) {
            $history = IndustryInsightHistory::where('skill_id', $skillId)
                ->orderBy('recorded_at')
                ->get(['period', 'demand'])
                ->map(fn ($row) => ['month' => $row->period, 'value' => $row->demand]);

            return $this->success([
                'skill_id' => $skill->id,
                'skill_code' => $skill->code,
                'skill_name' => $skill->name,
                'history' => $history,
            ]);
        }

        $canonicalRegion = $normalizer->normalize($rawRegion);

        if (! $canonicalRegion) {
            return $this->success([], "Region '{$rawRegion}' tidak dikenali");
        }

        $history = IndustryInsightRegionHistory::where('skill_id', $skillId)
            ->where('region', $canonicalRegion)
            ->orderBy('recorded_at')
            ->get(['period', 'demand'])
            ->map(fn ($row) => ['month' => $row->period, 'value' => $row->demand]);

        return $this->success([
            'skill_id' => $skill->id,
            'skill_code' => $skill->code,
            'skill_name' => $skill->name,
            'region' => $canonicalRegion,
            'history' => $history,
        ]);
    }
}