<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $casts = [
        'cover' => 'array', // pour gérer le JSON
    ];

    protected $fillable = [
        'events_category_id',
        'designation_ar',
        'description_ar',
        'start_date',
        'end_date',
        'place',
        'organizer',
    ];

    // Each event belongs to a category
    public function categories()
    {
        return $this->belongsToMany(EventsCategory::class, 'events_per_category', 'event_id', 'events_category_id');
    }
    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
