<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Introduction extends Model
{
    use HasFactory,SoftDeletes;
      
    protected $fillable = [
        'title' ,
        'title_en' ,
        'description' ,
        'description_en',
    ];
}
