<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function categories()
    {
        return $this->belongsToMany(BookCategory::class, 'books_per_category', 'book_id', 'category_id');
    }

}
