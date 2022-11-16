<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'precio' => $this->faker->randomFloat(2, 0, 1000),
            'impuesto' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
