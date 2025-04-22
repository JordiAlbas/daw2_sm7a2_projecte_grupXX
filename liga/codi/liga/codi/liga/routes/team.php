<?php

use App\Models\Equipo;

Route::post('/noureg', function () {
    $dades = array(
        "nom" => "Barça",
        "localizacion" => "Barcelona",
        "entrenador" => "Flick"
    );
    Equipo::create($dades);
    $dades = array(
        "nom" => "Real Madrid",
        "localizacion" => "Madrid",
        "entrenador" => "Ancelotti",
    );
    Equipo::create($dades);
});
Route::get('/mostrareg', function () {
    $nom = "Barça";
    $dades = Equipo::where("nom", "=", $nom)->first();
    echo $dades["localizacion"] . "\n";
});
Route::delete('/delreg', function () {
    $nom = "Real Madrid";
    Equipo::where("nom", "=", $nom)->delete();
});
