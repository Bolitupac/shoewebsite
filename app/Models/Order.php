<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'email',
        'first_name',
        'last_name',
        'address_line_1',
        'city',
        'state',
        'items',
        'total',
        'status',
    ];

    protected $casts = [
        'items' => 'array',
        'total' => 'decimal:2',
    ];
}
