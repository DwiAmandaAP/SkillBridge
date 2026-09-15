<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressHistory extends Model
{
    protected $table = 'progress_history';

    protected $fillable = ['user_id', 'readiness_score', 'skill_snapshot', 'recorded_at'];

    protected $casts = [
        'skill_snapshot' => 'array',
        'recorded_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}