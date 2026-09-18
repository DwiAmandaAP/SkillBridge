<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    use ApiResponse;

    public function index()
    {
        return $this->success(Skill::select('id', 'code', 'name', 'category')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:100|unique:skills,code',
            'name' => 'required|string|max:255',
            'category' => 'required|in:technical,soft',
        ]);

        $skill = Skill::create($validated);

        return $this->success([
            'id' => $skill->id,
            'code' => $skill->code,
            'name' => $skill->name,
        ], 'Skill ditambahkan', 201);
    }

    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'code' => 'sometimes|string|max:100|unique:skills,code,'.$skill->id,
            'name' => 'sometimes|string|max:255',
            'category' => 'sometimes|in:technical,soft',
        ]);

        $skill->update($validated);

        return $this->success([
            'id' => $skill->id,
            'name' => $skill->name,
        ], 'Skill diperbarui');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return $this->success(null, 'Skill dihapus');
    }
}