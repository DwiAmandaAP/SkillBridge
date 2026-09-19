<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndustryInsightHistory extends Model
{
    protected $table = 'industry_insight_history';

    protected $fillable = ['skill_id', 'demand', 'trend', 'job_sample_size', 'period', 'recorded_at'];

    protected $casts = ['recorded_at' => 'datetime'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}