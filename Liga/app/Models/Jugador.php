<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

;

class Jugador extends Model
{
    protected $table = 'jugadores';

    protected $fillable = [
        'nombre', 
        'apellidos', 
        'correo', 
        'direccion', 
        'ciudad', 
        'distrito', 
        'telefono', 
        'equipo_id' // Nombre del campo en español
    ];

    // Relación con Equipo
    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equip'); // Asegurar que coincida
    }
}