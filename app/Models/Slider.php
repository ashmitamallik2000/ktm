<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' ,
        'title_en' ,
        'photo'
    ];

    public function photo():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('slider', 'public') : null
        );
    }

}