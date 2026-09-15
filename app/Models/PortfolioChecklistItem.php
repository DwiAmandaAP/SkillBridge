<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioChecklistItem extends Model
{
    protected $fillable = ['code', 'category', 'label'];

    public function userProgress()
    {
        return $this->hasMany(UserPortfolioProgress::class, 'checklist_item_id');
    }
}