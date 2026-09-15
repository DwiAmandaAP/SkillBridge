<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $fillable = ['industry_insight_mode', 'last_aggregated_at'];

    protected $casts = ['last_aggregated_at' => 'datetime'];

    public static function current(): self
    {
        return static::firstOrFail();
    }
}