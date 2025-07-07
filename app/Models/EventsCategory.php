<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsCategory extends Model
{
    use HasFactory;

    protected $table = 'events_category';

    protected $fillable = ['name'];

    // One category has many events
    public function events()
    {
        return $this->belongsToMany(Event::class, 'events_per_category', 'events_category_id', 'event_id');
    }
}
