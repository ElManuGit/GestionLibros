<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Model {

    protected $table = "clientes";
    protected $fillable = ['nombre', 'estado', 'apellido', 'fecha_nacimiento', 
        'email', 'password', 'imagen', 'telefono_fax', 
        'telefono', 'tipo_documento', 'numero_documento', 'direccion', 'localidad_id'];
    
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function Localidad() {
        return $this->belongsTo('App\Localidad');
    }
    
    public function Usuario() {
        return $this->belongsTo('App\Usuario');
    }
    
    public function Pedidos() {
        return $this->hasMany('App\Pedido');
    }
}
