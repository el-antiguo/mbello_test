<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'role' => User::ADMIN_ROLE,
            ],
            [
                'name' => 'user1',
                'email' => 'user1@test.com',
                'role' => User::USER_ROLE,
            ],
            [
                'name' => 'user2',
                'email' => 'user2@test.com',
                'role' => User::USER_ROLE,
            ],
        ]);
        Producto::factory()->createMany([
            [
                'nombre' => 'Producto 1',
                'precio' => 123.45,
                'impuesto' => 5,
            ],
            [
                'nombre' => 'Producto 2',
                'precio' => 45.65,
                'impuesto' => 15,
            ],
            [
                'nombre' => 'Producto 3',
                'precio' => 39.73,
                'impuesto' => 12,
            ],
            [
                'nombre' => 'Producto 4',
                'precio' => 250.00,
                'impuesto' => 8,
            ],
            [
                'nombre' => 'Producto 5',
                'precio' => 59.35,
                'impuesto' => 10,
            ],
        ]);

    }
}
