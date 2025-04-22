@extends('disseny')

@section('content')
<div class="container">
    <h1>Lista de Jugadores</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Equipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jugadores as $jugador)
            <tr>
                <td>{{ $jugador->nombre }}</td>
                <td>{{ $jugador->apellidos }}</td>
                <td>{{ $jugador->equipo->nombre }}</td>
                <td>
                    <a href="{{ route('jugadores.edit', $jugador) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('jugadores.destroy', $jugador) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al Dashboard</a>
</div>
@endsection