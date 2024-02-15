<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'parent_id',
        'text',
        'language_id',
        'slug', // Add 'slug' to the fillable array
    ];

    public function language()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
