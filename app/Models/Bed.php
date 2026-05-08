<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bed extends Model
{
    use HasFactory;

    protected $fillable = [
        'dorm_id',
        'bed_number',
        'is_functional',
        'notes'
    ];

    protected $casts = [
        'is_functional' => 'boolean',
        'dorm_id' => 'integer'
    ];

    public function dorm(): BelongsTo
    {
        return $this->belongsTo(Dorm::class);
    }

    public function bookingItems(): HasMany
    {
        return $this->hasMany(BookingItem::class);
    }
}
