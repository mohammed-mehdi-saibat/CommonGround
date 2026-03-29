<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function PHPSTORM_META\map;

class Dorm extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'total_beds',
        'floor_number',
        'is_active',
        'description',
        'category_id'
    ];

    protected $casts = [
        'total_beds' => 'integer',
        'floor_number' => 'integer',
        'category_id' => 'integer',
        'is_active' => 'boolean'
    ];

    public function beds(): HasMany
    {
        return $this->hasMany(Bed::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
