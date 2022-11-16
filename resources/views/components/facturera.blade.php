<div>
    <form method="GET" action="{{route('factura.create')}}">
        <button type="submit">Create Factura</button>
    </form>

    <p>facturas</p>

    <div>
        <ul>
            @foreach($facturas as $factura)
                <li>
                    <a href="{{route('factura.show',['factura' => $factura->id])}}">
                        Factura: {{$factura->id}}
                        Fecha: {{$factura->created_at}}
                        Cliente: {{$factura->user->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>