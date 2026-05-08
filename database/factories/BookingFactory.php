<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->state(['role' => 'guest']),
            'reference_number' => 'BK-' . fake()->unique()->numberBetween(100000, 999999),
            'status' => fake()->randomElement(['pending', 'confirmed', 'cancelled', 'completed']),
            'total_amount' => fake()->randomFloat(2, 50, 500),
            'notes' => fake()->optional()->sentence(),
            'booking_date' => fake()->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
