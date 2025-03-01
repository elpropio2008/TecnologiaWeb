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
        Schema::create('estado_operativo', function (Blueprint $table) {
            $table->id();
            $table->string('Estado',150);
            $table->unsignedBigInteger('IdOperativo');
            $table->unsignedBigInteger('IdUbicacion');

            $table->foreign('IdOperativo')->references('IdOperativo')->on('operativo_policials')->onDelete('cascade');
            $table->foreign('IdUbicacion')->references('IdUbicacion')->on('ubicaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estado_operativo');
    }
};
