<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;


class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone_number',
        'position',
        'hired_at'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'hired_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
