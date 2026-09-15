<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentHistory extends Model
{
    protected $table = 'assessment_history';

    protected $fillable = ['user_id', 'score', 'taken_at'];

    protected $casts = ['taken_at' => 'datetime'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}