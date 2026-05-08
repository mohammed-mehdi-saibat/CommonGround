<?php

namespace Database\Factories;

use App\Models\Bed;
use App\Models\Dorm;
use Illuminate\Database\Eloquent\Factories\Factory;

class BedFactory extends Factory
{
    protected $model = Bed::class;

    public function definition(): array
    {
        return [
            'dorm_id' => Dorm::factory(),
            'bed_number' => fake()->unique()->bothify('B-###'),
            'is_functional' => true,
            'notes' => fake()->optional()->sentence(),
        ];
    }
}
