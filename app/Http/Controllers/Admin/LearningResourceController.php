<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LearningResource;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class LearningResourceController extends Controller
{
    use ApiResponse;

    /**
     * GET Learning Resources
     *
     * Description: Menampilkan seluruh resource pembelajaran yang tersimpan.
      *
      * @group Admin - Learning Resources
      * @authenticated
     */
    public function index()
    {
        return $this->success(
            LearningResource::select(
                'id',
                'skill_id',
                'title',
                'provider',
                'type',
                'url'
            )->get()
        );
    }

    /**
     * POST Learning Resource
     *
     * Description: Menambahkan resource pembelajaran yang dikaitkan dengan sebuah skill.
     *
      * @group Admin - Learning Resources
      * @authenticated
     * @bodyParam skill_id integer required ID skill. Example: 3
     * @bodyParam title string required Judul resource. Example: PHP Documentation
     * @bodyParam provider string Penyedia resource. Example: PHP.net
     * @bodyParam type string Jenis resource. Example: documentation
     * @bodyParam url string required URL resource yang valid. Example: https://www.php.net/docs.php
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'title' => 'required|string|max:255',
            'provider' => 'nullable|string',
            'type' => 'nullable|string',
            'url' => 'required|url',
        ]);

        $resource = LearningResource::create($validated);

        return $this->success([
            'id' => $resource->id,
            'title' => $resource->title,
        ], 'Resource ditambahkan', 201);
    }

    /**
     * DELETE Learning Resource
     *
     * Description: Menghapus resource pembelajaran berdasarkan ID resource.
     *
      * @group Admin - Learning Resources
      * @authenticated
     * @urlParam learningResource integer required ID resource pembelajaran. Example: 1
     */
    public function destroy(LearningResource $learningResource)
    {
        $learningResource->delete();

        return $this->success(null, 'Resource dihapus');
    }
}
