<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class ControladorEquipo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos_equipos = Equipo::all();
        return view('llista', compact('datos_equipos'));
        // Recollirà totes les entrades de la taula equipos i les desarà dins d'una
        //variable de nom $datos_esquipos
        //Cridara a la vista llista.blade.php que es trobarà a resouces/views per mostrar
        //les dades dels treballadors
        //The compact() function creates an array from variables and their values.
    }

    public function index_basic()
    {
        $datos_equipos = Equipo::all();
        return view('llista-basica', compact('datos_equipos'));
    }

    public function show_basic($id)
    {
        $datos_equipos = Equipo::findOrFail($id);
        return view('mostra-basica', compact('datos_equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea');
    }

    public function store(Request $request)
    {
        $nuevoEquipo = $request->validate([
            'nom' => 'required',
            'localizacion' => 'required',
            'entrenador' => 'required'
        ]);
        $equipo = Equipo::create($nuevoEquipo);
        return view('dashboard');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $datos_equipos = Equipo::findOrFail($id);
        return view('mostra', compact('datos_equipos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datos_equipos = Equipo::findOrFail($id);
        return view('actualitza', compact('datos_equipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nuevos_datos_equipos = $request->validate([
            'nom' => 'required',
            'localizacion' => 'required',
            'entrenador' => 'required',

        ]);
        Equipo::findOrFail($id)->update($nuevos_datos_equipos);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id)->delete();
        return view('dashboard');
    }
}
