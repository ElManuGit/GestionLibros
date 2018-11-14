<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoProveedor extends Model
{
    protected $table = "pedidos_proveedores";
    protected $fillable = ['estado', 'proveedor_id', 'fecha'];
    
    public function Libros() {
        return $this->belongsToMany('App\Libro');
    }
    
    public function Proveedor() {
        return $this->belongsTo('App\Proveedor');
    }
}
