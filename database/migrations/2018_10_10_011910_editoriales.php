<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Editoriales extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('editoriales', function (Blueprint $table) {
            $table->increments('id');

            $table->boolean('estado')->default(true);
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo');
            $table->string('sitio_web');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('editoriales');
    }

}
