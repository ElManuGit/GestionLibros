<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColeccionLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coleccion_libro', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('coleccion_id')->unsigned()->nullable();
            $table->foreign('coleccion_id')->references('id')->on('colecciones')->nullable();
            
            $table->integer('libro_id')->unsigned()->nullable();
            $table->foreign('libro_id')->references('id')->on('libros')->nullable();
            
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
        Schema::dropIfExists('coleccion_libro');
    }
}
