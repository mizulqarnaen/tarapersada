<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Course;

class AcademySeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(5)
            ->has(Course::factory()->count(10))
            ->create();
    }
}
