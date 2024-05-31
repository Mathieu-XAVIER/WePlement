<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weshipp extends Model
{


    protected $table = 'weshipp';

    protected $fillable = [
        'we_name',
        'user_id',
        'start_date',
        'end_date',
        'subscription_type',
        'product_ids',
        'recurrence_frequency',
    ];

    protected $casts = [
        'product_ids' => 'array',
    ];

    public function products()
    {
        return Product::whereIn('id', $this->product_ids)->get();
    }
}
