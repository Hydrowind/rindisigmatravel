<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'originalname',
        'mimetype',
        'encoding',
        'path',
        'destination',
        'size',
        'aux',
        'uploader_id',
        'object_id',
        'object_model',
    ];

    public function object()
    {
        return $this->morphTo();
    }

}
