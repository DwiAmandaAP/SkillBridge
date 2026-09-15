<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'slug', 'name', 'category', 'difficulty', 'industry_demand',
        'job_sample_size', 'remote_friendly', 'short_description',
        'description', 'responsibilities', 'tools',
    ];

    protected $casts = [
        'remote_friendly' => 'boolean',
        'responsibilities' => 'array',
        'tools' => 'array',
    ];

    public function careerSkills()
    {
        return $this->hasMany(CareerSkill::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'career_skill')
            ->withPivot(['required_level', 'importance'])
            ->withTimestamps();
    }

    public function users()
    {
        return $this->hasMany(User::class, 'target_career_id');
    }

    public function roadmaps()
    {
        return $this->hasMany(Roadmap::class, 'target_career_id');
    }
}