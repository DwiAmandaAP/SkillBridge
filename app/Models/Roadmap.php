<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    protected $fillable = ['user_id', 'target_career_id', 'generated_at'];

    protected $casts = ['generated_at' => 'datetime'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function targetCareer()
    {
        return $this->belongsTo(Career::class, 'target_career_id');
    }

    public function phases()
    {
        return $this->hasMany(RoadmapPhase::class)->orderBy('sort_order');
    }
}