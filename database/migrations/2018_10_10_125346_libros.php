<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            
            $table->boolean('estado')->default(true);
            $table->string('titulo');
            $table->string('isbn');
            $table->string('year_publicacion');
            $table->string('edicion');
            $table->string('imagen')->default('sin_imagen.png');
            $table->string('tamano');
            $table->string('encuadernacion');
            $table->integer('paginas');
            $table->string('presentacion')->nullable();
            $table->string('sinopsis', 5000);
            $table->integer('stock')->default(0);
            
            $table->integer('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id')->on('idiomas');
            
            $table->integer('editorial_id')->unsigned()->nullable();
            $table->foreign('editorial_id')->references('id')->on('editoriales')->nullable();
            
            $table->integer('genero_id')->unsigned()->nullable();
            $table->foreign('genero_id')->references('id')->on('generos')->nullable();
            
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
        Schema::dropIfExists('libros');
    }
}
