<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'code',
        'slug_en',
        'name_en',
        'is_active'
    ];

    // Optionally, you can define additional properties, relationships, or configuration here.
}

