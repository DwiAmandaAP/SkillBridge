<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    use ApiResponse;

    /**
     * GET Admin Skills
     *
     * Description: Menampilkan seluruh skill yang tersedia untuk kebutuhan administrasi taxonomy.
      *
      * @group Admin - Skill Management
      * @authenticated
     */
    public function index()
    {
        return $this->success(
            Skill::select('id', 'code', 'name', 'category')->get()
        );
    }

    /**
     * POST Admin Skill
     *
     * Description: Menambahkan skill baru ke taxonomy skill.
     *
      * @group Admin - Skill Management
      * @authenticated
     * @bodyParam code string required Kode unik skill. Example: php
     * @bodyParam name string required Nama skill. Example: PHP
     * @bodyParam category string required Kategori skill: technical atau soft. Example: technical
     */
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

    /**
     * PATCH Admin Skill
     *
     * Description: Memperbarui data skill yang sudah ada. Semua field bersifat opsional.
     *
      * @group Admin - Skill Management
      * @authenticated
     * @urlParam skill integer required ID skill. Example: 3
     * @bodyParam code string Kode unik skill. Example: php
     * @bodyParam name string Nama skill. Example: PHP
     * @bodyParam category string Kategori skill: technical atau soft. Example: technical
     */
    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'code' => 'sometimes|string|max:100|unique:skills,code,' . $skill->id,
            'name' => 'sometimes|string|max:255',
            'category' => 'sometimes|in:technical,soft',
        ]);

        $skill->update($validated);

        return $this->success([
            'id' => $skill->id,
            'name' => $skill->name,
        ], 'Skill diperbarui');
    }

    /**
     * DELETE Admin Skill
     *
     * Description: Menghapus skill dari taxonomy.
     *
      * @group Admin - Skill Management
      * @authenticated
     * @urlParam skill integer required ID skill. Example: 3
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return $this->success(null, 'Skill dihapus');
    }
}
