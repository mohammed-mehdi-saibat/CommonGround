<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Dorm extends Model
{
    protected $fillable = [
        'name',
        'description',
        'total_beds',
        'gender_type',
        'is_ensuite',
        'base_price',
        'currency',
        'has_ac',
        'has_lockers',
        'has_individual_plugs',
        'has_curtains',
        'is_active',
        'floor_number'
    ];

    protected $casts = [
        'total_beds' => 'integer',
        'is_ensuite' => 'boolean',
        'base_price' => 'decimal:2',
        'has_ac' => 'boolean',
        'has_lockers' => 'boolean',
        'has_individual_plugs' => 'boolean',
        'has_curtains' => 'boolean',
        'is_active' => 'boolean',
        'floor_number' => 'integer'
    ];
}
