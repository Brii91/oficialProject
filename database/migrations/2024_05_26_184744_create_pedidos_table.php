<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('telefono');
            $table->string('correo');
            $table->date('fechaEntrega');
            $table->time('horaRecogida');
            $table->text('observaciones');
            $table->string('nombreProducto');
            $table->decimal('precio', 8, 2);
            $table->integer('cantidad');
            $table->decimal('subTotal', 8, 2);
            $table->decimal('total', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
