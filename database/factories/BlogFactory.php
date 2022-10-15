<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog::class>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'creator' => $this->faker->sentence(mt_rand(6, 8)),
            'description' => $this->faker->sentence(mt_rand(8, 10)),
            // 'user_id' => mt_rand(1,3)
        ];
    }
}
