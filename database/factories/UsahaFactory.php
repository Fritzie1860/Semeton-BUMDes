<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsahaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'lokasi' => $this->faker->address(),
            'jenis' => $this->faker->randomElement(['jasa', 'dagang'])
        ];
    }
}
