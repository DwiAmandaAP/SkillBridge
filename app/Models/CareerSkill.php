<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerSkill extends Model
{
    protected $table = 'career_skill';

    protected $fillable = ['career_id', 'skill_id', 'required_level', 'importance'];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}