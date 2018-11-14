<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = "localidades";
    protected $fillable = ['nombre', 'codigo_postal', 'provincia_id'];
    
    public function Provincia() {
        return $this->belongsTo('App\Provincia');
    }
    
    public function Clientes() {
        return $this->hasMany('App\Cliente');
    }
}
