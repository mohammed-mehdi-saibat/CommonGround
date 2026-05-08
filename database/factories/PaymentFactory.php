<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'stripe_session_id' => 'cs_test_' . fake()->unique()->md5(),
            'stripe_payment_intent' => 'pi_' . fake()->unique()->md5(),
            'status' => fake()->randomElement(['pending', 'paid', 'failed']),
            'amount' => fake()->randomFloat(2, 50, 500),
            'currency' => 'usd',
        ];
    }
}
