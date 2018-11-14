<?php

use Illuminate\Database\Seeder;
use App\Autor;
use Illuminate\Support\Facades\DB;

class AutoresSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $ernesto_sabato = Autor::create([
                    'id' => '1',
                    'nombre' => 'Ernesto',
                    'apellido' => 'Sábato',
                    'imagen' => 'ernesto_sabato.jpeg',
                    'biografia' => '(Rojas, Argentina, 1911 - Santos Lugares, 2011) Escritor argentino. Sólo tres novelas, espaciadas en el tiempo, componen su producción estrictamente literaria: El túnel (1948), Sobre héroes y tumbas (1961) y Abaddón el exterminador (1974); a pesar de ello, Ernesto Sábato figura entre los más destacados autores del Boom de la literatura hispanoamericana de los años 60. Con ellos compartió un afán renovador manifiesto en las técnicas narrativas (la superposición de tramas y la fusión de novela y ensayo fueron patentes desde su segunda novela), mientras que en lo temático se orientó hacia una indagación de signo existencialista sobre los abismos de la naturaleza humana y la pervivencia de la barbarie en la civilización moderna.',
                    'nacionalidad' => 'Argentina'
        ]);

        $victor_irureta = Autor::create([
                    'id' => '2',
                    'nombre' => 'Victor',
                    'apellido' => 'Irureta',
                    'imagen' => 'victor_irueta.jpg',
                    'biografia' => 'Escritor de criminalistica',
                    'nacionalidad' => 'España'
        ]);

        $gabriel = Autor::create([
                    'id' => '3',
                    'nombre' => 'Gabriel',
                    'apellido' => 'Garcia Marquez',
                    'imagen' => 'gabriel_garcia.jpg',
                    'biografia' => 'Novelas',
                    'nacionalidad' => 'Venezuela'
        ]);

        $mario = Autor::create([
                    'id' => '4',
                    'nombre' => 'Mario',
                    'apellido' => 'Vargas Llosa',
                    'imagen' => 'mario_vargas.jpg',
                    'biografia' => '“Jorge Mario Pedro Vargas Llosa. (Arequipa, Perú, 28 de marzo de 1936). Escritor, político y periodista peruano. Premio Nobel de Literatura 2010.

Pasa su infancia entre Bolivia y Perú y al terminar sus estudios primarios colabora en los diarios La Crónica y La Industria. En 1952 escribe una obra de teatro titulada La huida del Inca, que se estrena en un teatro de Lima.

Estudia Letras y Derecho en la Universidad Nacional Mayor de San Marcos y empieza a colaborar profesionalmente en periódicos y revistas, siendo editor de los Cuadernos de Composición y la revista Literatura.

En 1958 le conceden la beca de estudios "Javier Prado" en la Universidad Complutense de Madrid, donde obtiene el título de Doctor en Filosofía y Letras. Un año más tarde se traslada a París, y allí trabaja en diferentes medios hasta que logra entrar en la Agencia France Press y, más tarde, en la Radio Televisión Francesa, donde conoce a numerosos escritores hispanoamericanos.

En 1965 se integra en la revista cubana Casa de las Américas como miembro de su consejo de redacción y permanece en ella hasta 1971. En esos años actúa varias veces como jurado de los premios Casa de las Américas.

Posteriormente viaja a Nueva York, invitado al Congreso Mundial del PEN Club, e instala su residencia en Londres, donde trabaja como profesor de Literatura Hispanoamericana en el Queen Mary College.

Durante este periodo trabaja además como traductor para la UNESCO en Grecia, junto a Julio Cortázar; hasta 1974 su vida y la de su familia transcurre en Europa, residiendo en París, Londres y Barcelona. 

En 1975 inicia una serie de trabajos cinematográficos, y en marzo de ese año es elegido Miembro de Número en la Real Academia Peruana de la Lengua. En 1976 es elegido presidente del PEN Club Internacional, cargo que ocupa hasta 1979.

En Perú presenta el programa televisivo La Torre de Babel y en 1983 preside la Comisión Investigadora del caso Uchuraccay, dedicado a resolver el asesinato de ocho periodistas. A finales de los ochenta entra en el mundo de la política en Perú y en 1990 regresa a Londres, donde retoma su actividad literaria. 

En marzo de 1993 obtiene la nacionalidad española, sin renunciar a la peruana. Colabora en el diario El País y con la revista cultural Letras Libres. 

En 1994 es nombrado miembro de la Real Academia Española y ese mismo año gana el Premio Miguel de Cervantes; posteriormente es reconocido doctor honoris causa en numerosas universidades. Su obra ha sido traducida a más de 30 idiomas.

En 2013 le conceden el premio Columnistas de El Mundo, en reconocimiento a su faceta periodística.”',
                    'nacionalidad' => 'Argentina'
        ]);

        $king = Autor::create([
                    'id' => '5',
                    'nombre' => 'Stephen',
                    'apellido' => 'King',
                    'imagen' => 'stephen_king.jpg',
                    'biografia' => "Escritor estadounidense de novelas de terror, Stephen King, cuyo pseudónimo es el de Richard Bachman, nació el 21 de septiembre de 1947 en Portland. Apenas convivió con su padre, pues cuando apenas tenía dos años abandonó a su familia, fue su madre quien les crio a él y a su hermano mayor. De niño presenció un trágico accidente, cuando uno de sus amigos quedó atrapado en las vías del tren y arrollado por el mismo, y aunque se sospecha que este suceso es la inspiración de sus propias obras, el autor desecha esa idea. Su afición a este género se debió más bien a la lectura de los libros de ficción y terror que una tía suya coleccionaba.

Es un autor de novelas de terror muy populares, muchas de las cuales se han llevado al cine con notable éxito. Empezó a escribir a temprana edad, vendiendo sus cuentos a sus compañeros y posteriormente a enviar sus relatos a periódicos.

Su primera novela fue Carrie en 1974, una historia sobre una joven con poderes psíquicos, la cual en un principio tiró a la basura, pero gracias a su esposa reanudó la historia y llegó a ser uno de sus grandes éxitos posteriormente, llevaba al cine. A partir de este gran éxito público más obras cómo: El misterio de Salem's Lot (1975), El resplandor (1977), La zona muerta (1979), Cujo (1981), Cementerio de animales (1983), It (1986), Misery (1987), La cúpula (2009), Doctor Sueño (2013), Revival (2013), varias de ellas llevadas también llevadas al cine.

A primeras horas de la tarde del 19 de junio de 1999 mientras paseaba por el arcén de una autovía, fue atropellado por un coche en dirección a North Novell, y después trasladado al Hospital Central de Maine. Sus heridas fueron muy graves y después de cinco operaciones, King retomó el trabajo donde lo había dejado en la novela On Writing.

Utiliza una sencilla metodología para escribir bien: “Leo cuatro horas al día y escribo otras cuatro; si no se encuentra tiempo para hacerlo, no podrás convertirte en un buen escritor”. El escritor ha declarado que escribir es más para él una pasión que un oficio.

En el año 2003 recibió el Nacional Book Award por su trayectoria y difusión de las letras norteamericanas.

En los últimos años ha recuperado grandes clásicos de su obra, como El Resplandor, gracias a su secuela Doctor Sueño, y se ha adentrado en nuevos géneros que antes sólo había practicado en el cuento, como el policial, con Mr. Mercedes.

En 2015, King fue galardonado con la Medalla Nacional de las Artes por parte del gobierno de los Estados Unidos como reconocimiento a su larga trayectoria dentro del mundo de las letras.",
                    'nacionalidad' => 'Estados Unidos'
        ]);
    }

}
