@extends('disseny')
@section('content')
<h1>Dades del Equipo</h1>
<div class="mt-5">
    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr class="table-primary">
                <th scope="col">CAMP</td>
                <th scope="col">VALOR</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>id</td>
                <td>{{$datos_equipos->id}}</td>
            </tr>
            <tr>
                <td>Nom</td>
                <td>{{$datos_equipos->nom}}</td>
            </tr>
            <tr>
                <td>localizacion</td>
                <td>{{$datos_equipos->localizacion}}</td>
            </tr>
            <tr>
                <td>Entrenador</td>
                <td>{{$datos_equipos->entrenador}}</td>
            </tr>
        </tbody>
    </table>
    <div class="p-6 bg-white border-b border-gray-200">
        <a href="{{ url('dashboard-basic') }}">Torna al dashboard</div>
    </div>
    <div>
        @endsection