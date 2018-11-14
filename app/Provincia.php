<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = "provincias";
    protected $fillable = ['nombre', 'pais_id'];
    
    public function Localidades() {
        return $this->hasMany('App\Localidad');
    }
    
    public function Pais() {
        return $this->belongsTo('App\Pais');
    }
}
