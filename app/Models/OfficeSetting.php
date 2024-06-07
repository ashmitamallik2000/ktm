<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Support\Facades\Storage;

class OfficeSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'office_name',
        'office_name_en',
        'email',
        'phone',
        'logo',
        'flag',
        'background_image',
        'Map_iframe',
        'Facebook_iframe',
        'Twitter_iframe',
        'information_officer_id',
        'office_head_id',
        'spoke_person_id',
    ];
    public function logo():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('officesetting', 'public') : null
        );
    }
    public function flag():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('officesetting', 'public') : null
        );
    }
    public function backgroundImage():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('officesetting', 'public') : null
        );
    }
    public function informationofficer():BelongsTo
    {
        return $this->belongsTo(Employee::class,"information_officer_id");
    }
    public function officehead():BelongsTo
    {
        return $this->belongsTo(Employee::class,"office_head_id");
    }
    public function spokePerson():BelongsTo
    {
        return $this->belongsTo(Employee::class,"spoke_person_id");
    }
}
