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
        Schema::table('vuelos', function (Blueprint $table) {
            $table->dropColumn('puerta_embarque');
            $table->dropColumn('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->string('puerta_embarque')->after('numero_vuelo');
            $table->enum('estado', ['Programado', 'En Vuelo', 'Aterrizando', 'Cancelado'])->default('Programado');
        });
    }
};