<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";
    protected $fillable = ['estado', 'cliente_id', 'fecha'];
    
    public function Libros() {
        return $this->belongsToMany('App\Libro');
    }
    
    public function Cliente() {
        return $this->belongsTo('App\Cliente');
    }
}
