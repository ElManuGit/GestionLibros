<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetallesIngresos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_ingresos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('cantidad');
            $table->decimal('precio_unitario');
            
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            
            $table->integer('libro_id')->unsigned();
            $table->foreign('libro_id')->references('id')->on('libros');
            
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
        Schema::dropIfExists('detalles_ingresos');
    }
}
