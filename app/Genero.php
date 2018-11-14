<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

    protected $table = "generos";
    protected $fillable = ['nombre', 'descripcion'];

//    public function Libros() {
//        return $this->hasMany('App\Libro');
//    }
}
