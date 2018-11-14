<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model {

    protected $table = "autores";
    protected $fillable = ['nombre', 'apellido', 'biografia', 'nacionalidad', 'estado', 'imagen'];

    public function Libros() {
        return $this->belongsToMany('App\Libro');
    }
    
    public function estado() {
        $estado1 = "Deshabilitado";
        if ($this->estado) {
            $estado1 = "Habilitado";
        }
        return $estado1;
    }
}
