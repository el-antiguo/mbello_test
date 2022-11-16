<?php

namespace Database\Factories;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        ];
    }

    public function withUser(int $userId)
    {
        $user = User::findOrFail($userId);

        return $this->for($user, 'user');
    }

    public function hasCompras(?int $number = null)
    {
        $number ??= $this->faker->numberBetween(1, 10);

        return $this->has(
            Compra::factory()
                ->count($number)
                ->withUsuario($this->user->id)
                ->hasProducto()
        );
    }
}
