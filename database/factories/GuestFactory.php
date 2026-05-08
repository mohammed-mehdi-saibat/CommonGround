<?php

namespace Database\Factories;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    protected $model = Guest::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->state(['role' => 'guest']),
            'cin' => fake()->unique()->bothify('??######'),
            'passport_number' => fake()->unique()->bothify('??#######'),
            'nationality' => fake()->country(),
        ];
    }
}
