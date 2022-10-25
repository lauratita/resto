<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'email' => Str::random(7).'@gmail.com',
            'no_hp' => $this->faker->phoneNumber(),
            'people' => $this->faker->randomNumber(2),
            'time' => $this->faker->time(),
            'date' => $this->faker->dateTime(),
            'code' => 'AS123RST',
            'status' => '1',
            'price' => $this->faker->numberBetween($min = 1000, $max = 10000000),
            'message' => $this->faker->sentence(mt_rand(5,10))
        ];
    }
}
