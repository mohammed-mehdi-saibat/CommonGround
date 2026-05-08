<?php

namespace Database\Seeders;

use App\Models\Dorm;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $guests = User::where('role', 'guest')->get();
        $dorms = Dorm::all();

        foreach ($dorms as $dorm) {
            // Each dorm gets 1-3 reviews
            $reviewers = $guests->random(rand(1, 3));

            foreach ($reviewers as $reviewer) {
                Review::factory()->create([
                    'user_id' => $reviewer->id,
                    'dorm_id' => $dorm->id,
                ]);
            }
        }
    }
}
