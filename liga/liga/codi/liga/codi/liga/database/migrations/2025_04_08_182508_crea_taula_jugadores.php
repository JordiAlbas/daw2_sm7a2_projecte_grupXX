<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id(); // El identificador único del jugador (primary key)
            $table->string('nom'); // Nom del jugador
            $table->string('cognoms'); // Cognoms del jugador
            $table->string('correu'); // Correu electrònic del jugador
            $table->string('adreça'); // Adreça física del jugador
            $table->string('ciutat'); // Ciutat on viu el jugador
            $table->string('districte'); // Districte de la ciutat
            $table->string('telefon'); // Telèfon del jugador
            //$table->unsignedBigInteger('equip'); // Identificador de l'equip (foreign key)
            //$table->foreign('equip')->references('id')->on('masters'); // Relació amb la taula masters

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
    