<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name_ar', 'name_fr'];
    public function articles()
    {
        
        return $this->belongsToMany(Article::class, 'articles_per_category');
    }


}
