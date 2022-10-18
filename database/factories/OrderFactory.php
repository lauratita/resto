<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2,5)),
            'menu' => $this->faker->sentence(mt_rand(2,5)),
            'price' => $this->faker->randomNumber(6),
            'time' => $this->faker->randomNumber(1),
            'status' => $this->faker->randomNumber(1)
        ];
    }
}
