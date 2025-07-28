<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation_ar',
        'designation_fr',
        'description',
        'date_de_publication',
        'DOI',
        'author',
        'link',
        'cover',
    ];

    protected $casts = [
        'date_de_publication' => 'datetime',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'articles_per_category');
    }


}

