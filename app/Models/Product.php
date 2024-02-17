<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $fillable = [
        'product_category_id',
        'name',
        'language_id',
        'slug', // Add 'slug' to the fillable array
        'description',
        'text',
        'position_nb',
        'is_active',
        'price',
        'discount_percentage'
    ];
    public const MEDIA_IMAGES = 'images';

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection(self::MEDIA_IMAGES);

    }
}
