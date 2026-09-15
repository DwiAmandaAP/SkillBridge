<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningResource extends Model
{
    protected $fillable = ['skill_id', 'title', 'provider', 'type', 'url'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}