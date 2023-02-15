@extends("layout")

@section("content")

    <a href="{{ route('clientes.index') }}" class="boton">Volver</a>

    <h2>Detalles del Cliente</h2>

    <table>
        <tr>
            <th class="encabezado-tabla" id="esquina-izq">Nombre</th>
            <td>{{ $cliente->nombre }}</td>
        </tr>
        <tr>
            <th class="encabezado-tabla">RFC</th>
            <td>{{ $cliente->rfc }}</td>
        </tr>
        <tr>
            <th class="encabezado-tabla">Dirección</th>
            <td>{{ $cliente->direccion }}</td>
        </tr>
        <tr>
            <th class="encabezado-tabla">Teléfono</th>
            <td>{{ $cliente->telefono }}</td>
        </tr>
        <tr>
            <th class="encabezado-tabla">E-Mail</th>
            <td>{{ $cliente->email }}</td>
        </tr>
    </table>

@endsection