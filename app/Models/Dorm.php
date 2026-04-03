<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

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

    protected static function booted(): void
    {
        static::creating(function (Dorm $dorm) {
            $baseSlug = Str::slug($dorm->name . '-' . $dorm->category_id);
            $slug = $baseSlug;
            $counter = 1;

            while (Dorm::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '_' . $counter;
                $counter++;
            }

            $dorm->slug = $slug;
        });
    }
}
