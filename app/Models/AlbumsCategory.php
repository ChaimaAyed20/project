<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumsCategory extends Model
{
    protected $fillable = [
        'photo',
        'video',
    ];
    public function albums()
    {
        return $this->belongsToMany(Album::class, 'albums_per_category', 'category_id', 'album_id');
    }
    

}
