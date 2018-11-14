<?php

use Illuminate\Database\Seeder;
use App\Editorial;
use App\Telefono;

class EditorialesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $paidos = Editorial::create([
                    'id' => '1',
                    'nombre' => 'Ediciones Paidós',
                    'sitio_web' => 'www.facebook.com/EditorialPaidosArg',
                    'correo' => 'paidos@paidos.com',
                    'telefono' => '376154225689'
        ]);

        $estrada = Editorial::create([
                    'id' => '2',
                    'nombre' => 'Estrada',
                    'sitio_web' => 'www.editorialestrada.com.ar',
                    'correo' => 'estrada@editorial.com',
                    'telefono' => '376154225689'
        ]);

        $puertoPalos = Editorial::create([
                    'id' => '3',
                    'nombre' => 'Puerto de Palos',
                    'sitio_web' => 'www.puertodepalos.com.ar',
                    'correo' => 'puertopalos@puertopalos.com',
                    'telefono' => '376154225689'
        ]);

        $paraDummies = Editorial::create([
                    'id' => '4',
                    'nombre' => 'Para Dummies',
                    'sitio_web' => 'www.dummies.com/store/Para-Dummies.html',
                    'correo' => 'fordummies@dummies.com',
                    'telefono' => '376154225689'
        ]);
    }

}
