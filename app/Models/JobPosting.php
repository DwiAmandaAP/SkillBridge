<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    protected $fillable = [
        'source', 'source_url', 'title', 'company', 'location', 'region', 'role_category',
        'description', 'posted_at', 'search_keyword', 'status', 'scraped_at',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'scraped_at' => 'datetime',
    ];

    public function jobPostingSkills()
    {
        return $this->hasMany(JobPostingSkill::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_posting_skills')
            ->withTimestamps();
    }
}