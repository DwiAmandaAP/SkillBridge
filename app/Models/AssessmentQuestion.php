<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentQuestion extends Model
{
    protected $fillable = [
        'skill_id',
        'question',
        'options',
    ];

    protected $casts = [
        'options' => 'array',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}