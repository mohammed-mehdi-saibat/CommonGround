<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Dorm;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DormFactory extends Factory
{
    protected $model = Dorm::class;

    public function definition(): array
    {
        $name = 'Dorm ' . fake()->unique()->numberBetween(100, 999);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'total_beds' => fake()->numberBetween(4, 12),
            'floor_number' => fake()->numberBetween(0, 3),
            'is_active' => true,
            'description' => fake()->sentence(),
            'category_id' => Category::factory(),
        ];
    }
}
