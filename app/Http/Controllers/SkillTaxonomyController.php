<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Traits\ApiResponse;

class SkillTaxonomyController extends Controller
{
    use ApiResponse;

    /**
     * GET Internal Skill Taxonomy
     *
     * Description: Mengambil taxonomy skill beserta kode, nama, dan aliases untuk kebutuhan
     * service internal seperti klasifikasi lowongan. (endpoint untuk ML)
      *
      * @group Internal - Skill Taxonomy
      * @authenticated
     */
    public function index()
    {
        $skills = Skill::select('code', 'name', 'aliases')->get()
            ->map(fn ($skill) => [
                'code' => $skill->code,
                'name' => $skill->name,
                'aliases' => $skill->aliases ?? [],
            ]);

        return $this->success(['skills' => $skills]);
    }
}