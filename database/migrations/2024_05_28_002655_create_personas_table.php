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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('IdPersona');
            $table->integer('CI');
            $table->string('Nombres',100);
            $table->string('Apellidos',100);
            $table->date('FechaNacimiento');
            $table->string('EstadoCivil',100);
            $table->string('Profesion',100);
            $table->string('Direccion');
            $table->integer('Telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
