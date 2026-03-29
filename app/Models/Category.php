<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use function PHPSTORM_META\map;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'gender_type',
        'base_price',
        'currency',
        'is_ensuite',
        'has_ac',
        'has_lockers',
        'has_individual_plugs',
        'has_curtains'
    ];

    protected $casts = [
        'base_price' => 'decimal:2',
        'is_ensuite' => 'boolean',
        'has_ac' => 'boolean',
        'has_lockers' => 'boolean',
        'has_individual_plugs' => 'boolean',
        'has_curtains' => 'boolean'

    ];

    public function dorms(): HasMany
    {
        return $this->hasMany(Dorm::class);
    }
}
