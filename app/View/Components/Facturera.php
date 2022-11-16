<?php

namespace App\View\Components;

use App\Models\Factura;
use Illuminate\View\Component;

class Facturera extends Component
{
    public $facturas;

    public function __construct()
    {
        $this->facturas = Factura::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('components.facturera');
    }
}
