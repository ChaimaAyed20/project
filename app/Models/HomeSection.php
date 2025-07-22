<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'short_description',
        'image1',
        'image2',
        'image3',
        'icon1', 'icon1_title', 'icon1_description',
        'icon2', 'icon2_title', 'icon2_description',
        'icon3', 'icon3_title', 'icon3_description',
        'icon4', 'icon4_title', 'icon4_description',
    ];
}
