<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'Standard Mixed Dorm',
            'gender_type' => 'mixed',
            'base_price' => 15.00,
            'is_ensuite' => false,
        ]);

        Category::factory()->create([
            'name' => 'Female Only Dorm',
            'gender_type' => 'female_only',
            'base_price' => 18.00,
            'is_ensuite' => true,
            'has_curtains' => true,
        ]);

        Category::factory()->create([
            'name' => 'Deluxe Private Dorm',
            'gender_type' => 'mixed',
            'base_price' => 25.00,
            'is_ensuite' => true,
            'has_ac' => true,
            'has_curtains' => true,
            'has_individual_plugs' => true,
        ]);
    }
}
