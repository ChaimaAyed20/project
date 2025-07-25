<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
    public function categories()
    {
        return $this->belongsToMany(AlbumsCategory::class, 'albums_per_category', 'album_id', 'category_id');
    }
    
}
