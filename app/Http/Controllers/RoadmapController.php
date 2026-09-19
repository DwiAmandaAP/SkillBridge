<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use App\Models\RoadmapPhase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoadmapController extends Controller
{
    /**
     * POST Generate Roadmap
     *
     * Description: Membuat atau membuat ulang roadmap berdasarkan career tujuan, skill pengguna,
     * dan kesenjangan level skill. Endpoint ini gagal jika pengguna belum memilih career tujuan.
      *
      * @group User - Roadmap
      * @authenticated
     */
    public function generate(Request $request)
    {
        $user = $request->user();

        if (!$user->target_career_id) {
            return response()->json([
                'status' => 422,
                'message' => 'Target career belum dipilih',
                'data' => null,
            ], 422);
        }

        $career = $user->targetCareer()
            ->with([
                'careerSkills.skill.skillContent',
            ])
            ->first();

        if (!$career) {
            return response()->json([
                'status' => 404,
                'message' => 'Career tidak ditemukan',
                'data' => null,
            ], 404);
        }

        $userSkills = $user->skills()
            ->get()
            ->keyBy('skill_id');

        $roadmap = DB::transaction(function () use ($user, $career, $userSkills) {

            $roadmap = Roadmap::updateOrCreate(
                [
                    'user_id' => $user->id,
                ],
                [
                    'target_career_id' => $career->id,
                    'generated_at' => now(),
                ]
            );

            $roadmap->phases()->delete();

            $sortOrder = 1;

            foreach ($career->careerSkills as $careerSkill) {

                $skill = $careerSkill->skill;

                if (!$skill) {
                    continue;
                }

                $userSkill = $userSkills->get($skill->id);
                $userLevel = $userSkill ? $userSkill->level : 0;

                $gap = $userLevel - $careerSkill->required_level;

                if ($gap <= -40) {
                    $priority = 'High';
                } elseif ($gap < 0) {
                    $priority = 'Medium';
                } else {
                    $priority = 'Low';
                }

                $content = $skill->skillContent;

                RoadmapPhase::create([
                    'roadmap_id' => $roadmap->id,
                    'skill_id' => $skill->id,
                    'title' => $skill->name,
                    'priority' => $priority,
                    'status' => 'not_started',
                    'learning_objective' => $content?->objective,
                    'why' => $content?->why,
                    'after_text' => $content?->after_text,
                    'resources' => null,
                    'tasks' => $content?->tasks,
                    'mini_project' => $content?->mini_project,
                    'duration_days' => $content?->duration_days,
                    'sort_order' => $sortOrder++,
                ]);
            }

            return $roadmap;
        });

        return response()->json([
            'status' => 200,
            'message' => 'Roadmap berhasil dibuat',
            'data' => [
                'roadmap_id' => $roadmap->id,
                'target_career_id' => $roadmap->target_career_id,
            ],
        ], 200);
    }

    /**
     * GET My Roadmap
     *
     * Description: Mengambil roadmap pengguna beserta career tujuan dan seluruh fase roadmap.
      *
      * @group User - Roadmap
      * @authenticated
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $roadmap = Roadmap::with([
            'targetCareer',
            'phases.skill',
        ])
        ->where('user_id', $user->id)
        ->first();

        if (!$roadmap) {
            return response()->json([
                'status' => 404,
                'message' => 'Roadmap tidak ditemukan',
                'data' => null,
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $roadmap,
        ]);
    }
        /**
         * PATCH Update Roadmap Phase
         *
         * Description: Memperbarui status fase roadmap milik pengguna yang sedang terautentikasi.
         *
         * @group User - Roadmap
         * @authenticated
         * @urlParam id integer required ID fase roadmap. Example: 1
         * @bodyParam status string required Status fase: not_started, in_progress, atau completed. Example: in_progress
         */
        public function updatePhase(Request $request, $id)
        {
            $validated = $request->validate([
                'status' => 'required|in:not_started,in_progress,completed',
            ]);

            $user = $request->user();

            $phase = RoadmapPhase::whereHas('roadmap', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->where('id', $id)
            ->first();

            if (!$phase) {
                return response()->json([
                    'status' => 404,
                    'message' => 'Roadmap phase tidak ditemukan',
                    'data' => null,
                ], 404);
            }

            $phase->update([
                'status' => $validated['status'],
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Status roadmap berhasil diperbarui',
                'data' => [
                    'id' => $phase->id,
                    'status' => $phase->status,
                ],
            ], 200);
        }
    }
