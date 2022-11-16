<?php

namespace App\Actions\Factura;

use App\Models\Compra;
use App\Models\Factura;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;

final class CreareFacturas
{
    public function createAll(): void
    {
        $users = User::whereHas('noFacturedCompras')->get();

        foreach ($users as $user) {
            $this->createFactura($user);
        }

        Session::flash('message', $users->count());
    }

    public function createFactura(?User $user = null): Factura
    {
        $user ??= auth()->user();

        $compras = $user->noFacturedCompras()->get();

        return DB::transaction(fn () => tap(Factura::create([
            'user_id' => $user->id,
            'sub_total' => $compras->sum(function (Compra $compra) {
                return $compra->producto->precio;
            }),
            'impuestos_total' => $compras->sum(function (Compra $compra) {
                return $compra->producto->impuesto;
            }),
        ]), function (Factura $factura) use ($compras): void {
            $compras->each(fn (Compra $compra) => $compra
                ->factura()
                ->associate($factura)
                ->save()
            );
        }));
    }
}