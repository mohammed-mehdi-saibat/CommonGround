<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Dorm;
use Illuminate\Database\Seeder;

class DormSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            Dorm::factory()->count(2)->create([
                'category_id' => $category->id,
            ]);
        }
    }
}
