<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleDemandHistory extends Model
{
    protected $table = 'role_demand_history';

    protected $fillable = [
        'role', 'region', 'job_count', 'total_jobs',
        'percentage', 'trend', 'period', 'recorded_at',
    ];

    protected $casts = ['recorded_at' => 'datetime'];
}