<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const TYPE_TOUR = 0;
    const TYPE_ACCOMMODATION = 1;
    const TYPE_EVENT_ORGANIZER = 2;
    const TYPE_TRANSPORTATION = 3;

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
