<?php

namespace Database\Factories;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    protected $model = Staff::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->state(['role' => 'staff']),
            'phone_number' => fake()->phoneNumber(),
            'position' => fake()->randomElement(['receptionist', 'housekeeping', 'manager', 'maintenance']),
            'hired_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
