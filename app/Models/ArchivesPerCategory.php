<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivesPerCategory extends Model
{
    use HasFactory;

    protected $table = 'archives_per_category';

    protected $fillable = ['archive_id', 'category_id'];
}

