<x-layout>
    <div>
        <p>Factura: {{$factura->id}}</p>
        <p>Fecha: {{$factura->created_at}}</p>
        <p>Cliente: {{$factura->user->name}}</p>
        <p>Productos: </p>
        <ul>
            @foreach($factura->productos as $producto)
                <li>{{$producto->nombre}} | {{$producto->precio}} + {{$producto->impuesto}}</li>
            @endforeach
        </ul>
        <br>
        <p>sub total: {{$factura->sub_total}}  impuestos: {{$factura->impuestos_total}}  total: {{$factura->sub_total + $factura->impuestos_total}}</p>
    </div>
</x-layout>