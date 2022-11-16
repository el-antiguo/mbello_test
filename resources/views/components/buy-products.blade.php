<div>
    <p>products comprados {{ $productsBuyed ?? 0}}</p>

    @if (Session::has('message'))
        <p>producto comprado: {{ Session::get('message') }}</p>
    @endif

    <form method="GET" action="{{route('compra.create')}}">
        <select name="producto">
            <option selected>select one</option>
            @foreach($productos as $producto)
                <option value="{{$producto->id}}">
                    {{$producto->nombre}} | {{$producto->precio}} + {{$producto->impuesto}}
                </option>
            @endforeach
        </select>
        <button type="submit">Buy</button>
    </form>
</div>