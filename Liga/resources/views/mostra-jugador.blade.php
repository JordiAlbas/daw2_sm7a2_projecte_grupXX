@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Jugador</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $jugador->nombre }} {{ $jugador->apellidos }}</h5>
            <p class="card-text">
                <strong>Equipo:</strong> {{ $jugador->equipo->nombre }}<br>
                <strong>Correo:</strong> {{ $jugador->correo }}<br>
                <strong>Dirección:</strong> {{ $jugador->direccion }}
            </p>
            <a href="{{ route('jugadores.pdf', $jugador) }}" class="btn btn-dark">Descargar PDF</a>
        </div>
    </div>
</div>
@endsection