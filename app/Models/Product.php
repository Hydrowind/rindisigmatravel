<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cover_image',
        'description',
        'price',
        'rating',
        'max_guest',
        'min_age',
        'duration',
        'start_date',
        'end_date',
        'type',
    ];
}
