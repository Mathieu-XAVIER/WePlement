<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAdress extends Model
{
    protected $table = 'delivery_adress';

    protected $fillable = [
        'adress',
        'city',
        'zip_code',
        'country',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
