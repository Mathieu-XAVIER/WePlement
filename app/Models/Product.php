<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'prod_name',
        'prod_price',
        'prod_desc',
        'brand_id',
        'category_id',
        'prod_images',
        'prod_sizes',
        'prod_flavors',
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'prod_id', 'cat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
