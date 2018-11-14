<?php

use Illuminate\Database\Seeder;
use App\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $el_simplista = Libro::create([
                    'id' => '1',
                    'titulo' => 'El Simplista',
                    'year_publicacion' => '2015',
                    'imagen' => 'sin_imagen.png',
                    'sinopsis' => '(Rojas, Argentina, 1911 - Santos Lugares, 2011) Escritor argentino. Sólo tres novelas, espaciadas en el tiempo, componen su producción estrictamente literaria: El túnel (1948), Sobre héroes y tumbas (1961) y Abaddón el exterminador (1974); a pesar de ello, Ernesto Sábato figura entre los más destacados autores del Boom de la literatura hispanoamericana de los años 60. Con ellos compartió un afán renovador manifiesto en las técnicas narrativas (la superposición de tramas y la fusión de novela y ensayo fueron patentes desde su segunda novela), mientras que en lo temático se orientó hacia una indagación de signo existencialista sobre los abismos de la naturaleza humana y la pervivencia de la barbarie en la civilización moderna.',
                    'edicion' => 'Tercera',
                    'genero_id' => '1',
                    'editorial_id' => '1',
                    'tamano' => '20x15',
                    'isbn' => '6431231',
                    'encuadernacion' => 'Tapa blanda',
                    'idioma_id' => '1',
                    'stock' => '50',
                    'presentacion' => 'De bolsillo',
                    'paginas' => '144'
        ]);
    }
}
