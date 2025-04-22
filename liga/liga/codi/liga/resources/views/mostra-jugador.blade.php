@extends('disseny')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detalles del Jugador</h1>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $jugador->nombre }} {{ $jugador->apellidos }}</h3>
            <p><strong>Correo:</strong> {{ $jugador->correo }}</p>
            <p><strong>Dirección:</strong> {{ $jugador->direccion }}</p>
            <p><strong>Ciudad:</strong> {{ $jugador->ciudad }}</p>
            <p><strong>Distrito:</strong> {{ $jugador->distrito }}</p>
            <p><strong>Teléfono:</strong> {{ $jugador->telefono }}</p>
            <p><strong>Equipo:</strong> {{ $jugador->equipo->nombre ?? 'Sin asignar' }}</p>

            <a href="{{ route('jugadores.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
