<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = ['code', 'title', 'description'];

    public function userAchievements()
    {
        return $this->hasMany(UserAchievement::class, 'achievement_code', 'code');
    }
}