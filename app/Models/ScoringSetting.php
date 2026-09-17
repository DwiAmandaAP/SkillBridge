<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScoringSetting extends Model
{
    protected $fillable = [
        'technical_weight',
        'soft_weight',
        'portfolio_weight',
        'experience_weight',
        'assessment_weight',
    ];

    // Singleton helper
    public static function current(): self
    {
        return static::firstOrFail();
    }
}