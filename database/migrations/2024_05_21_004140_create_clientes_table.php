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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('dni'); // Cambiado de 'int' a 'integer'
            $table->string('nombre');
            $table->string('apellido');
            $table->char('telefono'); // Considera usar string si el teléfono puede tener más de un carácter
            $table->string('correo'); // Cambiado de 'text' a 'string' para correos electrónicos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
