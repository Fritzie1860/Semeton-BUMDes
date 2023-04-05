<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrangFactory extends Factory
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
            'kontak' => $this->faker->numberBetween(111111111111111111, 999999999999999999),
            'alamat' => $this->faker->address(),
            'status' => $this->faker->randomElement(['pemasok', 'pelanggan'])
        ];
    }
}
