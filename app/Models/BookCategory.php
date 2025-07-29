<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class, 'books_per_category', 'category_id', 'book_id');
    }

}
