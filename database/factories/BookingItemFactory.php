<?php

namespace Database\Factories;

use App\Models\Bed;
use App\Models\Booking;
use App\Models\BookingItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingItemFactory extends Factory
{
    protected $model = BookingItem::class;

    public function definition(): array
    {
        $checkIn = fake()->dateTimeBetween('now', '+1 month');
        $checkOut = (clone $checkIn)->modify('+' . fake()->numberBetween(1, 7) . ' days');

        return [
            'booking_id' => Booking::factory(),
            'bed_id' => Bed::factory(),
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'price_per_night' => fake()->randomFloat(2, 10, 40),
            'subtotal' => fake()->randomFloat(2, 20, 200),
        ];
    }
}
