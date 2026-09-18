<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LearningResource;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class LearningResourceController extends Controller
{
    use ApiResponse;

    public function index()
    {
        return $this->success(
            LearningResource::select('id', 'skill_id', 'title', 'provider', 'type', 'url')->get()
        );
    }

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

    public function destroy(LearningResource $learningResource)
    {
        $learningResource->delete();

        return $this->success(null, 'Resource dihapus');
    }
}