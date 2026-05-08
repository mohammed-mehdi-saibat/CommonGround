<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guest extends Model

{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cin',
        'passport_number',
        'nationality'
    ];

    protected $casts = [
        'user_id' => 'integer'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
