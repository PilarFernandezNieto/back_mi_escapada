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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->boolean('es_hotel')->default(false);
            $table->string('nombre');
            $table->string('email');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('cp');
            $table->string('ciudad');
            $table->string('provincia');
            $table->string('web');
            $table->json('coordenadas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participantes');
    }
};
