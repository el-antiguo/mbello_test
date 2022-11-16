<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productsNumber = $this->command->ask('por favor ingrese el numero de productos a crear!!', 0);

        if ($productsNumber <= 0) {
            return;
        }

        $products = Producto::factory()->count($productsNumber)->create();

        $this->command->info($products->count() . ' productos creados');

        foreach ($products->toArray() as $producto) {
            $this->command->info(
                '>> name:' . $producto['nombre']
                . ' price:' . $producto['precio']
                . ' impuesto:' . $producto['impuesto']
            );
        }
    }
}
