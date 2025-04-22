<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->string('apellidos');
            $table->string('correo')->unique();
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('distrito');
            $table->string('telefono');
            $table->foreignId('equipo_id')->constrained('equipos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
    