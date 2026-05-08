<?php

namespace Database\Seeders;

use App\Models\Bed;
use App\Models\Booking;
use App\Models\BookingItem;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        $guests = User::where('role', 'guest')->get();
        $beds = Bed::all();

        foreach ($guests as $guest) {
            $booking = Booking::factory()->create([
                'user_id' => $guest->id,
            ]);

            // Create 1-2 items per booking
            $randomBeds = $beds->random(rand(1, 2));
            $totalAmount = 0;

            foreach ($randomBeds as $bed) {
                $price = $bed->dorm->category->base_price;
                $nights = rand(1, 5);
                $subtotal = $price * $nights;
                
                BookingItem::factory()->create([
                    'booking_id' => $booking->id,
                    'bed_id' => $bed->id,
                    'price_per_night' => $price,
                    'subtotal' => $subtotal,
                ]);

                $totalAmount += $subtotal;
            }

            $booking->update(['total_amount' => $totalAmount]);

            // Create payment for some bookings
            if (rand(0, 1)) {
                Payment::factory()->create([
                    'booking_id' => $booking->id,
                    'amount' => $totalAmount,
                    'status' => 'paid',
                ]);
            }
        }
    }
}
