@extends('disseny')
@section('content')
<h1>Lista de Equipos</h1>
<div class="mt-5">
    <table class="table">
        <thead>
            <tr class="table-primary">
                <td>Id</td>
                <td>Nom</td>
                <td>Localizacion</td>
                <td>Entrenador</td>
            </tr>
        </thead>
        <tbody>
            @foreach($datos_equipos as $team)
            <tr>
                <td>{{$team->id}}</td>
                <td>{{$team->nom}}</td>
                <td>{{$team->localizacion}}</td>
                <td>{{$team->entrenador}}</td>
                <td>Accions sobre la taula Equipos</td>
                <td class="text-left">
                    <form action="{{ route('teams.destroy', $team->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">
                            Esborra
                        </button>
                    </form>
                    <a href="{{ route('teams.edit', $team->id)}}" class="btn btn-primary btn-sm">Edita</a>
                    <a href="{{ route('teams.show', $team->id)}}" class="btn btn-info btn-sm">Mostra</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        @endsection