<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FileUpload;

class Product extends Model
{
    use HasFactory;

    const TYPE_TOUR = 'TOUR';

    const TYPE_ACCOMMODATION = 'ACCOMMODATION';
    const TYPE_EVENT = 'EVENT';
    const TYPE_TRANSPORTATION = 'TRANSPORTATION';
    const TYPE_TOUR_DOMESTIC = 'TOUR_DOMESTIC';
    const TYPE_TOUR_INTERNATIONAL = 'TOUR_INTERNATIONAL';

    protected $fillable = [
        'name',
        'cover_image',
        'description',
        'itinerary',
        'term_condition',
        'price',
        'min_guest',
        'duration',
        'type',
    ];

    public function images()
    {
        return $this->morphMany(FileUpload::class, 'object');
    }
}
