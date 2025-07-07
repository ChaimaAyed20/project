<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [
        'designation_ar',
    ];

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_per_category', 'category_id', 'news_id');
    }
}
