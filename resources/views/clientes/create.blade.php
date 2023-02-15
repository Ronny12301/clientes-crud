@extends("layout")

@section('content')
    
    <head>
        <a href="{{ route('clientes.index') }}" class="boton">Volver</a>
        <h2>Agregar Cliente</h2>
    </head>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre</label> <br>
        <input type="text" id="nombre" name="nombre"> <br>

        <label for="rfc">RFC</label> <br>
        <input type="text" id="rfc" name="rfc"> <br>

        <label for="direccion">Dirección</label> <br>
        <input type="text" id="direccion" name="direccion"> <br>

        <label for="telefono">Teléfono</label> <br>
        <input type="text" id="telefono" name="telefono"> <br>

        <label for="email">Email</label> <br>
        <input type="email" id="email" name="email"> <br>

        <button type="submit" class="boton btn-detalles">Agregar</button>
    </form>

@endsection
