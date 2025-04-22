<!DOCTYPE html>
<html>
<head>
    <title>Jugador: {{ $jugador->nombre }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #2c3e50; }
        p { margin: 5px 0; }
    </style>
</head>
<body>
    <h1>Datos del Jugador</h1>
    <p><strong>Nombre:</strong> {{ $jugador->nombre }}</p>
    <p><strong>Apellidos:</strong> {{ $jugador->apellidos }}</p>
    <p><strong>Equipo:</strong> {{ $jugador->equipo->nombre }}</p>
    <p><strong>Correo:</strong> {{ $jugador->correo }}</p>
    <p><strong>Dirección:</strong> {{ $jugador->direccion }}</p>
    <p><strong>Ciudad:</strong> {{ $jugador->ciudad }}</p>
    <p><strong>Teléfono:</strong> {{ $jugador->telefono }}</p>
</body>
</html>