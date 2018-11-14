<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = "imagenes";
    protected $fillable = ['libro_id', 'nombre', 'peso', 'ancho', 'alto', 'autor_id'];
    
    public function libro()   
    {
        return $this->belongsTo('App\Libro');
    }
    
    public function autor()   
    {
        return $this->belongsTo('App\Autor');
    }
    
}