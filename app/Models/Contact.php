<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'designation_ar',
        'email',
        'subject',
        'message',
    ];
}
