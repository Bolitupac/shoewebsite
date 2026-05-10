<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'name', 'price', 'category', 'section', 
        'image', 'description', 'colour', 'badge', 'hidden'
    ];

    protected $casts = [
        'hidden' => 'boolean',
    ];
}
