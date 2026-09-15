<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillContent extends Model
{
    protected $fillable = [
        'skill_id', 'objective', 'why', 'after_text', 'tasks',
        'mini_project', 'duration_days',
    ];

    protected $casts = ['tasks' => 'array'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}