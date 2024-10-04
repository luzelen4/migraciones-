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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->integer('id_vuelo')->autoIncrement();
            $table->string('numero_vuelo', 10)->unique();
            $table->string('aerolinea', 50);
            $table->string('origen', 50);
            $table->string('destinon', 10);
            $table->date('fecha_salida');
            $table->time('hora_salida');
            $table->time('duracion')->comment('Formato h:m:s no indica hora reloj, indica duración del vuelo.');
            $table->float('costo')->unsigned();
            $table->enum('estado', ['Programado', 'En Vuelo', 'Aterrizando', 'Cancelado'])->default('Programado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
