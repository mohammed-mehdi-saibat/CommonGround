<?php

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@commonground.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Staff
        User::factory()->count(3)->create(['role' => 'staff'])->each(function ($user) {
            Staff::factory()->create(['user_id' => $user->id]);
        });

        // Guests
        User::factory()->count(10)->create(['role' => 'guest'])->each(function ($user) {
            Guest::factory()->create(['user_id' => $user->id]);
        });
    }
}
