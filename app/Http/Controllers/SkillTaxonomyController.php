<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Traits\ApiResponse;

class SkillTaxonomyController extends Controller
{
    use ApiResponse;

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