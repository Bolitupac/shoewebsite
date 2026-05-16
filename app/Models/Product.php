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
        'image', 'description', 'colour', 'badge', 'hidden',
        'limited_edition', 'limited_edition_count', 'sold_out'
    ];

    protected $casts = [
        'hidden' => 'boolean',
        'category' => 'array',
        'limited_edition' => 'boolean',
        'sold_out' => 'boolean',
    ];
}
