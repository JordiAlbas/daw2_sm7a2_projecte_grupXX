@extends('disseny')
@section('content')
<h1>Llista d'empleats</h1>
<div class="mt-5">
  <table class="table">
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
            <a href="{{ route('teams.edit', $team->id)}}" class="btn btn-primary btn-sm">Edita</a>
            <form action="{{ route('teams.destroy', $team->id)}}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">
                Esborra
              </button>
            </form>
            <a href="{{ route('teams.show', $team->id)}}" class="btn btn-info btn-sm">Mostra</a>  
          </td>            
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection