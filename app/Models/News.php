<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'designation_ar',
        'description_ar',
        'cover',
        'author_id',
        'files',
        'images',
        'publication',
    ];

    protected $casts = [
        'files' => 'array',
        'images' => 'array',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function categories()
{
    return $this->belongsToMany(NewsCategory::class, 'news_per_category', 'news_id', 'category_id');
}

}
