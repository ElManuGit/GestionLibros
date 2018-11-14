<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = "ingresos";
    protected $fillable = ['fecha', 'numero_factura', 'observacion', 'proveedor_id'];
    
    public function Libros() {
        return $this->belongsToMany('App\Libro');
    }
    
    public function Proveedor() {
        return $this->belongsTo('App\Proveedor');
    }
}