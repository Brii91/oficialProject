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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('cliente'); 
            $table->date('fechaEmision');
            $table->string('producto');
            $table->integer('cantidad'); 
            $table->integer('precioProducto'); 
            $table->text('descripcion'); 
            $table->enum('metodoPago', ['Efectivo', 'Tarjeta']);
            $table->integer('total'); 


            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
