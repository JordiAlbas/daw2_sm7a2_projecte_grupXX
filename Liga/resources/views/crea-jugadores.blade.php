@extends('disseny')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Añade un nuevo Jugador
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('jugadores.store') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" name="correo" value="{{ old('correo') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="ciudad">Ciudad:</label>
                    <input type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="distrito">Distrito:</label>
                    <input type="text" class="form-control" name="distrito" value="{{ old('distrito') }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
                </div>

                <div class="form-group mb-4">
                    <label for="equipo_id">Equipo:</label>
                    <select class="form-control" name="equipo_id" required>
                        @foreach($equipos as $equipo)
                            <option value="{{ $equipo->id }}">{{ $equipo->nom }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </form>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('dashboard') }}">← Volver al Dashboard</a>
    </div>
@endsection
