<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    const WHATSAPP = 'WhatsApp';
    const HEADSCRIPT = 'HeadScript';
    const BODYSCRIPT = 'BodyScript';

    protected $fillable = [
        'name',
        'value',
    ];

    public function getWhatsApp(){
        return Configuration::where('name', this::WHATSAPP)->value;
    }
}
