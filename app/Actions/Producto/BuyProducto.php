<?php

namespace App\Actions\Producto;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;

final class BuyProducto
{
    /** @var array<string, mixed> */
    private array $rules = [
        'producto' => 'required|integer|exists:productos,id'
    ];

    public function buy(User $user, array $input): Compra
    {
        Validator::make($input, $this->rules)->validate();

        $producto = Producto::findOrFail($input['producto']);

        $compra = Compra::create([
            'user_id' => $user->id,
            'producto_id' => $producto->id,
        ]);

        Session::flash('message', $producto->nombre);

        return $compra;
    }
}
