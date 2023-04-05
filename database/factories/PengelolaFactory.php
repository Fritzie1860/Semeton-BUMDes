<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PengelolaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'password' => bcrypt('123456789'),
            'name' => $this->faker->name(),
            'status' => 'ketua'
        ];
    }
}
