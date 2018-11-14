<?php

use Illuminate\Database\Seeder;
use App\Localidad;

class LocalidadesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $posadas = Localidad::create([
                    'id' => '1',
                    'created_at' => date('Y-m-d H:m:s'),
                    'nombre' => 'Posadas',
                    'codigo_postal' => '3300',
                    'provincia_id' => '1',
        ]);

        $garupa = Localidad::create([
                    'id' => '2',
                    'created_at' => date('Y-m-d H:m:s'),
                    'nombre' => 'Garupá',
                    'codigo_postal' => '3304',
                    'provincia_id' => '1',
        ]);

        $wanda = Localidad::create([
                    'id' => '3',
                    'created_at' => date('Y-m-d H:m:s'),
                    'nombre' => 'Wanda',
                    'codigo_postal' => '3376',
                    'provincia_id' => '1',
        ]);
    }

}
