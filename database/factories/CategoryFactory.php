<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->unique()->word;
        $slug = Str::slug($title);

        // Pastikan slug unik (karena faker->unique tidak menjamin slug-nya unik)
        $originalSlug = $slug;
        $counter = 1;
        while (Category::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return [
            'title' => ucfirst($title),
            'slug' => $slug,
            'description' => $this->faker->sentence,
            'thumbnail' => 'images/categories/default.png',
            'status' => 'active',
        ];
    }
}
