@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('teams.update', $datos_equipos->id) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="nom">Nom</label>
				<input type="text" class="form-control" name="nom" value="{{ $datos_equipos->nom }}" />
			</div>
			<div class="form-group">           
				<label for="localizacion">Localizacion</label>
				<input type="text" class="form-control" name="localizacion" value="{{ $datos_equipos->localizacion }}"/>
			</div>
			<div class="form-group">           
				<label for="entrenador">Entrenador</label>
				<input type="text" class="form-control" name="entrenador" value="{{ $datos_equipos->entrenador }}"/>
			</div>
      
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('teams') }}">Accés directe a la Lista De Equipos</a
@endsection