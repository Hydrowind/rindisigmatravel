<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FileUpload;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image',
        'content',
    ];

    public function images()
    {
        return $this->morphMany(FileUpload::class, 'object');
    }
}
