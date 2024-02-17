<?php

namespace App\Models;

// app/Models/Category.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class PageCategory extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['name', 'language_id', 'is_active', 'position'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
