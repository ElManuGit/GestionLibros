<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $red = Proveedor::create([
                    'id' => '1',
                    'nombre' => 'Librerias RED',
                    'correo' => 'Sin correo',
                    'telefono_fax' => '3764446552',
                    'telefono' => '376154225689'
    ]);
        
    }
}
