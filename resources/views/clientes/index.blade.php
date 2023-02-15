@extends("layout")

@section("content")

    <a href="{{ route('clientes.create') }}" class="boton">Agregar Cliente</a> <br>
    
    <table>
        <thead>
        <tr>
            <th class="encabezado-tabla" id="esquina-izq">ID</th>
            <th class="encabezado-tabla">Nombre</th>
            <th class="encabezado-tabla" id="esquina-der">Acciones</th>
        </tr>
        </thead>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>
                    <form action="{{ route('clientes.destroy',$cliente->id) }}" method="post">
                        <a href="{{ route('clientes.show',$cliente->id) }}" class="btn-tabla btn-detalles">Detalles</a>
                        <a href="{{ route('clientes.edit',$cliente->id) }}" class="btn-tabla boton">Modificar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-tabla btn-eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection