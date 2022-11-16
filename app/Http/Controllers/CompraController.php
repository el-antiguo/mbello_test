<?php

namespace App\Http\Controllers;

use App\Actions\Producto\BuyProducto;
use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function create(BuyProducto $buyProducto, Request $request)
    {
        $this->authorize('create', Compra::class);

        $buyProducto->buy($request->user(), $request->all());

        return response()->redirectTo(route('dashboard'));
    }
}
