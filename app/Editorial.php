<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = "editoriales";
    protected $fillable = ['nombre', 'telefono', 'correo', 'sitio_web'];

    public function Libros() {
        return $this->hasMany('App\Libro');
    }

}
