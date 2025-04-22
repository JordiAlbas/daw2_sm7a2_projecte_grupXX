<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Models\Equipo;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    // Listar todos los jugadores
    public function index()
    {
        $jugadores = Jugador::with('equipo')->get();
        return view('llista-jugadores', compact('jugadores'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        $equipos = Equipo::all();
        return view('crea-jugadores', compact('equipos'));
    }

    // Guardar nuevo jugador
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:jugadores,correo',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'distrito' => 'required|string',
            'telefono' => 'required|string|max:15',
            'equipo_id' => 'required|exists:equipos,id', // Clave foránea en español
        ]);

        Jugador::create($request->all());
        return redirect()->route('jugadores.index')->with('success', '¡Jugador añadido correctamente!');
    }

    // Mostrar detalles de un jugador
    public function show(Jugador $jugador)
    {
        return view('mostra-jugador', compact('jugador'));
    }

    // Mostrar formulario de edición
    public function edit(Jugador $jugador)
    {
        $equipos = Equipo::all();
        return view('edita-jugador', compact('jugador', 'equipos'));
    }

    // Actualizar jugador
    public function update(Request $request, Jugador $jugador)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => "required|email|unique:jugadores,correo,{$jugador->id}",
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'distrito' => 'required|string',
            'telefono' => 'required|string|max:15',
            'equipo_id' => 'required|exists:equipos,id',
        ]);

        $jugador->update($request->all());
        return redirect()->route('jugadores.index')->with('success', '¡Jugador actualizado!');
    }

    // Eliminar jugador
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();
        return redirect()->route('jugadores.index')->with('success', '¡Jugador eliminado!');
    }

    // Generar PDF
    public function pdf(Jugador $jugador)
    {
        $pdf = \PDF::loadView('pdf-jugador', compact('jugador'));
        return $pdf->download("jugador_{$jugador->id}.pdf");
    }
}