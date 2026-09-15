<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScrapeRun extends Model
{
    protected $fillable = [
        'started_at', 'finished_at', 'status', 'jobs_found',
        'jobs_processed', 'error_message',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];
}