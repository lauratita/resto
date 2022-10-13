<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,5)),
            'price' => $this->faker->randomNumber(6),
            'description' => $this->faker->sentence(mt_rand(2,5)),
            'category' => ('Food / Drink / Dessert / Package'),
            'remember_token' => Str::random(10),
        ];
    }
}