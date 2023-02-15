@extends("layout")

@section("content")

    <head>
        <a href="{{ route('clientes.index') }}" class="boton">Volver</a>
        <h2>Modificar Cliente</h2>
    </head>

    <form action="{{ route('clientes.update',$cliente->id) }}" method="POST">
        @csrf
        @method("PUT")

        <label for="nombre">Nombre</label> <br>
        <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}"> <br>

        <label for="rfc">RFC</label> <br>
        <input type="text" id="rfc" name="rfc" value="{{ $cliente->rfc }}"> <br>

        <label for="direccion">Dirección</label> <br>
        <input type="text" id="direccion" name="direccion" value="{{ $cliente->direccion }}"> <br>

        <label for="telefono">Teléfono</label> <br>
        <input type="text" id="telefono" name="telefono" value="{{ $cliente->telefono }}"> <br>

        <label for="email">Email</label> <br>
        <input type="email" id="email" name="email" value="{{ $cliente->email }}"> <br>

        <button type="submit" class="boton btn-detalles">Modificar</button>
    </form>

@endsection


