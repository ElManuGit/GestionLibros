<?php

use Illuminate\Database\Seeder;
use App\Idioma;
class IdiomasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $español = Idioma::create([
                    'id' => '1',
                    'nombre' => 'Español',
        ]);
        $español = Idioma::create([
                    'id' => '2',
                    'nombre' => 'Inglés',
        ]);
        $español = Idioma::create([
                    'id' => '3',
                    'nombre' => 'Portugués',
        ]);
        $español = Idioma::create([
                    'id' => '4',
                    'nombre' => 'Francés',
        ]);
        $español = Idioma::create([
                    'id' => '5',
                    'nombre' => 'Alemán',
        ]);
        $español = Idioma::create([
                    'id' => '6',
                    'nombre' => 'Italiano',
        ]);
        $español = Idioma::create([
                    'id' => '7',
                    'nombre' => 'Ruso',
        ]);
        $español = Idioma::create([
                    'id' => '8',
                    'nombre' => 'Japonés',
        ]);$español = Idioma::create([
                    'id' => '9',
                    'nombre' => 'Guaraní',
        ]);$español = Idioma::create([
                    'id' => '10',
                    'nombre' => 'Chino',
        ]);
    }
}
