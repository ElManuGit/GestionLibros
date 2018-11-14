<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coleccion extends Model
{
    protected $table = "colecciones";
    protected $fillable = ['estado', 'nombre', 'descripcion', 'tipo'];

    public function Libros() {
        return $this->belongsToMany('App\Libro');
    }
    
}
