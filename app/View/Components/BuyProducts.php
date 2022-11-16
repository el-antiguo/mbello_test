<?php

namespace App\View\Components;

use App\Models\Producto;

use Illuminate\View\Component;

class BuyProducts extends Component
{
    public $productos;
    public $productsBuyed;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->productos = Producto::all();
        $this->productsBuyed = auth()->user()->noFacturedCompras->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buy-products');
    }
}
