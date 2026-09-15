<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'full_name', 'email', 'password', 'role', 'university', 'major',
        'semester', 'graduation_year', 'target_career_id',
        'target_timeline_months', 'github_username', 'onboarding_complete',
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'onboarding_complete' => 'boolean',
    ];

    public function targetCareer()
    {
        return $this->belongsTo(Career::class, 'target_career_id');
    }

    public function skills()
    {
        return $this->hasMany(UserSkill::class);
    }

    public function assessmentHistory()
    {
        return $this->hasMany(AssessmentHistory::class);
    }

    public function roadmap()
    {
        return $this->hasOne(Roadmap::class);
    }

    public function portfolioProgress()
    {
        return $this->hasMany(UserPortfolioProgress::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function achievements()
    {
        return $this->hasMany(UserAchievement::class);
    }

    public function progressHistory()
    {
        return $this->hasMany(ProgressHistory::class);
    }
}