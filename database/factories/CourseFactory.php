<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 50, 500),
            'thumbnail' => 'images/courses/default.png',
            'stars' => $this->faker->randomFloat(1, 3, 5),
            'category_id' => Category::factory(),
        ];
    }
}
