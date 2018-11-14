<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetallesPedidosProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_pedidos_proveedores', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('estado');
            $table->integer('cantidad');
            $table->float('precio_unitario');
            
            $table->integer('pedido_proveedor_id')->unsigned();
            $table->foreign('pedido_proveedor_id')->references('id')->on('pedidos_proveedores');
            
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
        Schema::dropIfExists('detalles_pedidos_proveedores');
    }
}
