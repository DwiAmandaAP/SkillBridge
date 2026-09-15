<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPortfolioProgress extends Model
{
    protected $table = 'user_portfolio_progress';

    protected $fillable = ['user_id', 'checklist_item_id', 'done'];

    protected $casts = ['done' => 'boolean'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function checklistItem()
    {
        return $this->belongsTo(PortfolioChecklistItem::class, 'checklist_item_id');
    }
}