<?php

use Illuminate\Database\Seeder;
use App\Genero;

class GenerosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $genero_1 = Genero::create([
                    'id' => '1',
                    'nombre' => 'Oda',
                    'descripcion' => '',
        ]);

        $genero_2 = Genero::create([
                    'id' => '2',
                    'nombre' => 'Himno',
                    'descripcion' => '',
        ]);

        $genero_3 = Genero::create([
                    'id' => '3',
                    'nombre' => 'Elegía',
                    'descripcion' => '',
        ]);

        $genero_4 = Genero::create([
                    'id' => '4',
                    'nombre' => 'Égloga',
                    'descripcion' => '',
        ]);

        $genero_5 = Genero::create([
                    'id' => '5',
                    'nombre' => 'Canción',
                    'descripcion' => '',
        ]);

        $genero_6 = Genero::create([
                    'id' => '6',
                    'nombre' => 'Sátira',
                    'descripcion' => '',
        ]);

        $genero_7 = Genero::create([
                    'id' => '7',
                    'nombre' => 'Tregedia',
                    'descripcion' => '',
        ]);

        $genero_8 = Genero::create([
                    'id' => '8',
                    'nombre' => 'Comedia',
                    'descripcion' => '',
        ]);

        $genero_9 = Genero::create([
                    'id' => '9',
                    'nombre' => 'Melodrama',
                    'descripcion' => '',
        ]);

        $genero_10 = Genero::create([
                    'id' => '10',
                    'nombre' => 'Tragicomedia',
                    'descripcion' => '',
        ]);

        $genero_11 = Genero::create([
                    'id' => '11',
                    'nombre' => 'Farsa',
                    'descripcion' => '',
        ]);

        $genero_12 = Genero::create([
                    'id' => '12',
                    'nombre' => 'Epopeya',
                    'descripcion' => '',
        ]);

        $genero_13 = Genero::create([
                    'id' => '13',
                    'nombre' => 'Poema épico',
                    'descripcion' => '',
        ]);

        $genero_14 = Genero::create([
                    'id' => '14',
                    'nombre' => 'Romance',
                    'descripcion' => '',
        ]);

        $genero_15 = Genero::create([
                    'id' => '15',
                    'nombre' => 'Fábula',
                    'descripcion' => '',
        ]);

        $genero_16 = Genero::create([
                    'id' => '16',
                    'nombre' => 'Epístola',
                    'descripcion' => '',
        ]);

        $genero_17 = Genero::create([
                    'id' => '17',
                    'nombre' => 'Cuento',
                    'descripcion' => '',
        ]);

        $genero_18 = Genero::create([
                    'id' => '18',
                    'nombre' => 'Leyenda',
                    'descripcion' => '',
        ]);

        $genero_19 = Genero::create([
                    'id' => '19',
                    'nombre' => 'Novela',
                    'descripcion' => '',
        ]);
    }

}
