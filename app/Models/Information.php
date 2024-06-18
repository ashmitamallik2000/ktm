<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Information extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable=[
        'title',
        'title_en',
    ];
    public function news():HasMany
    {
        return $this->hasMany(News::class);
    }
}
