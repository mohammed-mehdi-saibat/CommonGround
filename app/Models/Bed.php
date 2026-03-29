<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bed extends Model
{
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
}
