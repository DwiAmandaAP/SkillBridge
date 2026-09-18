<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['code', 'name', 'category'];

    protected $casts = [
    'aliases' => 'array',
    ];

    public function careers()
    {
        return $this->belongsToMany(Career::class, 'career_skill')
            ->withPivot(['required_level', 'importance'])
            ->withTimestamps();
    }

    public function careerSkills()
    {
        return $this->hasMany(CareerSkill::class);
    }

    public function industryInsight()
    {
        return $this->hasOne(IndustryInsight::class);
    }

    public function skillContent()
    {
        return $this->hasOne(SkillContent::class);
    }

    public function learningResources()
    {
        return $this->hasMany(LearningResource::class);
    }

    public function userSkills()
    {
        return $this->hasMany(UserSkill::class);
    }

    public function roadmapPhases()
    {
        return $this->hasMany(RoadmapPhase::class);
    }

    public function jobPostingSkills()
    {
        return $this->hasMany(JobPostingSkill::class);
    }

    public function jobPostings()
    {
        return $this->belongsToMany(JobPosting::class, 'job_posting_skills')
            ->withTimestamps();
    }
}