<?php

use Illuminate\Database\Seeder;
use App\Provincia;

class ProvinciasSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $misiones = Provincia::create([
                    'id' => '1',
                    'nombre' => 'Misiones',
                    'pais_id' => '1',
        ]);

        $formosa = Provincia::create([
                    'id' => '2',
                    'nombre' => 'Corrientes',
                    'pais_id' => '1',
        ]);

        $chaco = Provincia::create([
                    'id' => '3',
                    'nombre' => 'Chaco',
                    'pais_id' => '1',
        ]);

        $formosa = Provincia::create([
                    'id' => '4',
                    'nombre' => 'Formosa',
                    'pais_id' => '1',
        ]);

        $entre_rios = Provincia::create([
                    'id' => '5',
                    'nombre' => 'Entre Rios',
                    'pais_id' => '1',
        ]);

        $cordoba = Provincia::create([
                    'id' => '6',
                    'nombre' => 'Córdoba',
                    'pais_id' => '1',
        ]);
    }

}
