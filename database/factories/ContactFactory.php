<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'contact' => random_int(100000000, 999999999),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
