<?php

namespace App\Http\Controllers;

use App\Actions\Factura\CreareFacturas;
use App\Models\Factura;

class FacturaController extends Controller
{
    public function create(CreareFacturas $creareFacturas)
    {
        $this->authorize('create', Factura::class);

        $creareFacturas->createAll();

        return response()->redirectTo(route('dashboard'));
    }

    public function show(Factura $factura)
    {
        return view('factura', [
            'factura' => $factura,
        ]);
    }
}
