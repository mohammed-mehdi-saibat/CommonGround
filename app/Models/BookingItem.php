<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingItem extends Model
{

    protected $fillable = [
        'booking_id',
        'bed_id',
        'check_in',
        'check_out',
        'price_per_night',
        'subtotal'
    ];

    protected $casts = [
        'check_in' => 'datetime',
        'check_out' => 'datetime',
        'price_per_night' => 'decimal:2',
        'subtotal' => 'decimal:2'
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }


    public function bed(): BelongsTo
    {
        return $this->belongsTo(Bed::class);
    }
}
