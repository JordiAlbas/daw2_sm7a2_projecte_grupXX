@extends('disseny')

@section('content')
<div class="container">
    <h1>Editar Jugador</h1>
    
    <form action="{{ route('jugadores.update', $jugador) }}" method="POST">
        @csrf @method('PUT')
        
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $jugador->nombre }}" required>
        </div>

        <div class="form-group">
            <label>Apellidos:</label>
            <input type="text" name="apellidos" class="form-control" value="{{ $jugador->apellidos }}" required>
        </div>

        <div class="form-group">
            <label>Equipo:</label>
            <select name="equipo_id" class="form-control" required>
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ $jugador->equipo_id == $equipo->id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection