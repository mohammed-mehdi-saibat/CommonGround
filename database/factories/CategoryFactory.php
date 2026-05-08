<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $name = fake()->unique()->word() . ' ' . fake()->word();
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'gender_type' => fake()->randomElement(['mixed', 'female_only', 'male_only']),
            'base_price' => fake()->randomFloat(2, 10, 50),
            'currency' => 'USD',
            'is_ensuite' => fake()->boolean(),
            'has_ac' => fake()->boolean(),
            'has_lockers' => fake()->boolean(),
            'has_individual_plugs' => fake()->boolean(),
            'has_curtains' => fake()->boolean(),
        ];
    }
}
