<?php

namespace App\Models;

// app/Models/Category.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'language_id', 'is_active', 'position'];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
