<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustryInsight extends Model
{
    protected $fillable = ['skill_id', 'demand', 'trend', 'job_sample_size', 'period'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}