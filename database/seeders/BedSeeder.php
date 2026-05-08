<?php

namespace Database\Seeders;

use App\Models\Bed;
use App\Models\Dorm;
use Illuminate\Database\Seeder;

class BedSeeder extends Seeder
{
    public function run(): void
    {
        $dorms = Dorm::all();

        foreach ($dorms as $dorm) {
            for ($i = 1; $i <= $dorm->total_beds; $i++) {
                Bed::factory()->create([
                    'dorm_id' => $dorm->id,
                    'bed_number' => $dorm->id . '-' . $i,
                ]);
            }
        }
    }
}
