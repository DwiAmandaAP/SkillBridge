<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $careers = Career::withCount('careerSkills as required_skills_count')->get();

        return $this->success($careers->map(fn ($c) => [
            'id' => $c->id,
            'name' => $c->name,
            'required_skills_count' => $c->required_skills_count,
        ]));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'difficulty' => 'nullable|string',
            'industry_demand' => 'nullable|integer|min:0|max:100',
            'job_sample_size' => 'nullable|integer|min:0',
            'remote_friendly' => 'nullable|boolean',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'responsibilities' => 'nullable|array',
            'tools' => 'nullable|array',
            'required_skills' => 'nullable|array',
            'required_skills.*.skill_id' => 'required_with:required_skills|exists:skills,id',
            'required_skills.*.level' => 'required_with:required_skills|integer|min:0|max:100',
            'required_skills.*.importance' => 'required_with:required_skills|string',
        ]);

        $slug = Str::slug($validated['name']);
        $original = $slug;
        $i = 1;
        while (Career::where('slug', $slug)->exists()) {
            $slug = $original.'-'.$i++;
        }

        $career = Career::create([
            ...collect($validated)->except('required_skills')->toArray(),
            'slug' => $slug,
        ]);

        if (!empty($validated['required_skills'])) {
            $sync = [];
            foreach ($validated['required_skills'] as $rs) {
                $sync[$rs['skill_id']] = [
                    'required_level' => $rs['level'],
                    'importance' => $rs['importance'],
                ];
            }
            $career->skills()->sync($sync);
        }

        return $this->success([
            'id' => $career->id,
            'slug' => $career->slug,
        ], 'Career ditambahkan', 201);
    }

    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'category' => 'nullable|string',
            'difficulty' => 'nullable|string',
            'industry_demand' => 'nullable|integer|min:0|max:100',
            'job_sample_size' => 'nullable|integer|min:0',
            'remote_friendly' => 'nullable|boolean',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'responsibilities' => 'nullable|array',
            'tools' => 'nullable|array',
            'required_skills' => 'nullable|array',
            'required_skills.*.skill_id' => 'required_with:required_skills|exists:skills,id',
            'required_skills.*.level' => 'required_with:required_skills|integer|min:0|max:100',
            'required_skills.*.importance' => 'required_with:required_skills|string',
        ]);

        $career->update(collect($validated)->except('required_skills')->toArray());

        if (isset($validated['required_skills'])) {
            $sync = [];
            foreach ($validated['required_skills'] as $rs) {
                $sync[$rs['skill_id']] = [
                    'required_level' => $rs['level'],
                    'importance' => $rs['importance'],
                ];
            }
            $career->skills()->sync($sync);
        }

        return $this->success([
            'id' => $career->id,
            'name' => $career->name,
        ], 'Career diperbarui');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return $this->success(null, 'Career dihapus');
    }
}