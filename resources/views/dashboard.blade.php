<x-layout>
    @can('create', App\Modles\Factura::class)
        <x-facturera/>
    @endcan
    @can('create', App\Modles\Compra::class)
        <x-slot name="title">Admin Dashboard</x-slot>
        <x-buyProducts/>
    @endcan
</x-layout>