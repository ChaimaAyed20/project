<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = ['designation_ar', 'description_ar', 'category_id'];

    public function category()
    {
        return $this->belongsTo(ArchiveCategory::class, 'category_id');
    }
}
