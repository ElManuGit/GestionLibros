<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

    protected $table = "proveedores";
    protected $fillable = ['nombre', 'correo', 'telefono_fax', 'telefono'];
    
    
    public function PedidosProveedores() {
        return $this->hasMany('App\PedidoProveedor');
    }
    
    public function Ingresos() {
        return $this->hasMany('App\Ingreso');
    }

}
