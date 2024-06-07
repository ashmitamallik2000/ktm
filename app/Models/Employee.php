<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Employee extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
       'name',
       'name_en',
       'email',
       'department_id',
       'designation_id',
       'phone',
       'position',
       'photo',
    ];
    public function photo():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('employee', 'public') : null
        );
    }
    public function department():BelongsTo
    {
        return $this->BelongsTo(Department::class);
    }
    public function designation():BelongsTo
    {
        return $this->BelongsTo(Designation::class);
    }
}
