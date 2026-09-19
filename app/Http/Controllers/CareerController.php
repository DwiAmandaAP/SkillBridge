<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * GET Careers
     *
     * Description: Menampilkan daftar career yang tersedia untuk dipilih pengguna.
     * Hasil dapat difilter berdasarkan kategori, tingkat kesulitan, dan dukungan kerja remote.
     *
      * @group Career
      * @unauthenticated
     * @queryParam category string Filter kategori career. Example: technology
     * @queryParam difficulty string Filter tingkat kesulitan career. Example: intermediate
     * @queryParam remote_friendly boolean Filter career yang mendukung kerja remote. Example: true
     */
    public function index(Request $request)
    {
        $query = Career::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->difficulty);
        }

        if ($request->has('remote_friendly')) {
            $query->where('remote_friendly', $request->boolean('remote_friendly'));
        }

        $careers = $query->select([
            'id',
            'slug',
            'name',
            'industry_demand',
            'remote_friendly',
        ])->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $careers,
        ]);
    }

    /**
     * GET Career Detail
     *
     * Description: Menampilkan detail career berdasarkan slug, termasuk daftar skill yang dibutuhkan,
     * level minimum, dan tingkat kepentingannya.
     *
      * @group Career
      * @unauthenticated
     * @urlParam slug string required Slug career. Example: frontend-developer
     */
    public function show($slug)
    {
        $career = Career::where('slug', $slug)
            ->with(['skills'])
            ->firstOrFail();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => [
                'id' => $career->id,
                'slug' => $career->slug,
                'name' => $career->name,
                'required_skills' => $career->skills->map(function ($skill) {
                    return [
                        'skill_id' => $skill->id,
                        'skill_name' => $skill->name,
                        'required_level' => $skill->pivot->required_level,
                        'importance' => $skill->pivot->importance,
                    ];
                }),
            ],
        ]);
    }
}