<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = "direcciones";
    protected $fillable = ['barrio', 'calle', 'altura', 'piso', 'depto', 'observaciones', 'localidad'];

    public function Localidad() {
        return $this->belongsTo('App\Localidad');
    }

//    public function Proveedor() {
//        
//        return $this->belongsToMany('App\Direccion','relaciones_direcciones')
//            ->withPivot('menu_id','status');
//    }
}
