<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = "libros";
    protected $fillable = ['titulo', 'isbn', 'year_publicacion',
        'edicion', 'imagen', 'tamano', 'encuadernacion', 'paginas',
        'idioma_id', 'presentacion', 'sinopsis', 'stock', 'editorial_id',
        'genero_id'];

    public function Autores() {
        return $this->belongsToMany('App\Autor');
    }
    
    public function Colecciones() {
        return $this->belongsToMany('App\Coleccion');
    }
    
    public function Editorial() {
        return $this->belongsTo('App\Editorial');
    }
    
    public function Genero() {
        return $this->belongsTo('App\Genero');
    }
    
    public function Idioma() {
        return $this->belongsTo('App\Idioma');
    }
    
    public function Pedidos() {
        return $this->belongsToMany('App\Pedido');
    }
    
    public function Ingresos() {
        return $this->belongsToMany('App\Ingreso');
    }
    
    public function PedidosProveedores() {
        return $this->belongsToMany('App\PedidoProveedor');
    }
}
