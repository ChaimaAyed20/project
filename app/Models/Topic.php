<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'reference_id',
        'type_reference',
        'designation_ar',
        'description_ar',
    ];

    // Polymorphic relation
    public function reference()
    {
        return $this->morphTo(__FUNCTION__, 'type_reference', 'reference_id');
    }
}
