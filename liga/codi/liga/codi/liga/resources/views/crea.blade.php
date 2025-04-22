@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Añade un nuevo Equipo
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
        <form method="post" action="/teams">
            @csrf
            <!-- https://laravel.com/docs/10.x/csrf -->
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" />
            </div>
            <div class="form-group">
                <label for="localizacion">Localizacion</label>
                <input type="text" class="form-control" name="localizacion" />
            </div>
            <div class="form-group">
                <label for="entrenador">Entrenador</label>
                <input type="text" class="form-control" name="entrenador" />
            </div>
            <button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection