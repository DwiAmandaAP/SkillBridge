<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentQuestion extends Model
{
    protected $fillable = [
        'skill_id',
        'question',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}