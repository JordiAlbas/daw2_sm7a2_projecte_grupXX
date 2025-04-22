@extends('disseny')

@section('content')
<div class="container">
    <h1>Editar Jugador</h1>
    
    <form action="{{ route('jugadores.update', $jugador) }}" method="POST">
        @csrf @method('PUT')
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $jugador->nombre }}" required>
        </div>

        <div class="form-group">
            <label>Apellidos:</label>
            <input type="text" name="apellidos" class="form-control" value="{{ $jugador->apellidos }}" required>
        </div>

        <div class="form-group">
            <label>Correo:</label>
            <input type="email" name="correo" class="form-control" value="{{ $jugador->correo }}" required>
        </div>

        <div class="form-group">
            <label>Dirección:</label>
            <input type="text" name="direccion" class="form-control" value="{{ $jugador->direccion }}" required>
        </div>

        <div class="form-group">
            <label>Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" value="{{ $jugador->ciudad }}" required>
        </div>

        <div class="form-group">
            <label>Distrito:</label>
            <input type="text" name="distrito" class="form-control" value="{{ $jugador->distrito }}" required>
        </div>

        <div class="form-group">
            <label>Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $jugador->telefono }}" required>
        </div>

        <div class="form-group">
            <label>Equipo:</label>
            <select name="equipo_id" class="form-control" required>
                @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ $jugador->equipo_id == $equipo->id ? 'selected' : '' }}>
                [{{ $equipo->id }}] {{ $equipo->nom }}
                </option>


                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

