<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HomeInfo;

class HomeSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'short_description',
        'description',
        'icon',
        'image1',
        'image2',
        'image3',
    ];
    protected $casts = [
    'infos' => 'array',
    ];
     public function infos()
    {
        return $this->hasMany(HomeInfo::class, 'section_id');
    }
}
