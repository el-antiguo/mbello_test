<?php

namespace Database\Factories;

use App\Models\Factura;
use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
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

    public function hasProducto(?int $number = null)
    {
        $number ??= $this->faker->numberBetween(1, 10);

        return $this->has(Producto::factory()->count($number));
    }

    public function withProducto(int $productoId)
    {
        $producto = Producto::findOrFail($productoId);

        return $this->for($producto, 'producto');
    }

    public function withFactura(string $faturaId): self
    {
        $factura = Factura::findOrFail($faturaId);

        return $this->for($factura, 'factura');
    }

    public function withUsuario(int $UserId)
    {
        $usuario = User::findOrFail($UserId);

        return $this->for($usuario, 'usuario');
    }
}
