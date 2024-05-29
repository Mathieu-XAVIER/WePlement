<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'prod_id', 'cat_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
