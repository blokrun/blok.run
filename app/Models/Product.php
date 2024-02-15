<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

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

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

}
