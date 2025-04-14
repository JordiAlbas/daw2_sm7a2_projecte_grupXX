@extends('disseny')
@section('content')
<h1>Llista De EQUIPOS</h1>
<div class="mt-5">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="table-primary">
                <td>id</td>
                <td>Nom</td>
                <td>Localizacion</td>
                <td>Accions sobre la taula</td>
            </tr>
        </thead>
        <tbody>
            @foreach($datos_equipos as $team)
            <tr>
                <td>{{$team->id}}</td>
                <td>{{$team->nom}}</td>
                <td>{{$team->localizacion}}</td>
                <td class="text-left">
                    <a href="{{ route('teams.show_basic', $team->id)}}"
                        class="btn btn-info btn-sm">Mostra</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</a>
    </div>
    <div>
        @endsection