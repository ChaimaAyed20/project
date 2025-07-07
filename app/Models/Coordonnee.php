<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coordonnee extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'email',
        'address',
        'logo',
        'facebook',
        'instagram',
        'youtube',
        'linkedin',
    ];
}
