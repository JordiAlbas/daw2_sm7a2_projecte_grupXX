<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liga</title>
</head>

<body>
    <p>Pàgina inicial de l'aplicació web Liga</igap>
    <br>
    <a href="{{ url('/info') }}">Info</a><br>
    @if (Route::has('login'))
    @auth
    <a href="{{ url('/dashboard') }}">Dashboard</a>
    @else
    <a href="{{ route('login') }}">Log in</a><br>
    @endauth
    @endif
</body>

</html>