<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Publication extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'title_en',
        'document_id',
        'date',
        'photo',
        'position',
        'publisher',
        'publisher_en',
        'description',
        'description_en',
    ];
    public function photo():Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Storage::disk('public')->url($value) : '',
            set: fn ($value) => (!empty($value) && !is_string($value)) ? $value->store('document', 'public') : null
        );
    }
    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }
}
