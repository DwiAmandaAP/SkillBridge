<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoadmapPhase extends Model
{
    protected $fillable = [
        'roadmap_id', 'skill_id', 'title', 'priority', 'status',
        'learning_objective', 'why', 'after_text', 'resources', 'tasks',
        'mini_project', 'duration_days', 'sort_order',
    ];

    protected $casts = [
        'resources' => 'array',
        'tasks' => 'array',
    ];

    public function roadmap()
    {
        return $this->belongsTo(Roadmap::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}