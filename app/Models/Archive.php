<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Archive extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'contenu', 'archive_category_id']; // selon tes colonnes

    public function category()
    {
        return $this->belongsTo(ArchiveCategory::class, 'category_id');
    }
}