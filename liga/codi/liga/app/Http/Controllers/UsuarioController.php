<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuaris = User::all();
        return view('index-users', compact('usuaris'));
    }

    public function destroy($id)
    {
        $usuari = User::findOrFail($id);
        $usuari->delete();

        return redirect()->route('users.index')->with('success', 'Usuari eliminat correctament.');
    }
}
