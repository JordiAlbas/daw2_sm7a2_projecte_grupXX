@extends('disseny')

@section('content')
<div class="container">
    <h1>Llista d'Usuaris</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuaris as $usuari)
            <tr>
                <td>{{ $usuari->name }}</td>
                <td>{{ $usuari->email }}</td>
                <td>{{ $usuari->role ?? 'No assignat' }}</td>
                <td>
                    <form action="{{ route('users.destroy', $usuari->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('dashboard') }}" class="btn btn-primary">Torna al Dashboard</a>
</div>
@endsection