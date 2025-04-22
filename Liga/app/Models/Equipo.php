<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nom',
        'localizacion',
        'entrenador' 
    ];

    public function jugadores()
    {
        return $this->hasMany(Jugador::class, 'equip');
    }

}

