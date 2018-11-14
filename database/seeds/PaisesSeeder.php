<?php

use Illuminate\Database\Seeder;
use App\Pais;
use Illuminate\Support\Facades\DB;

class PaisesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $argentina = Pais::create([
                    'id' => '1',
                    'nombre' => 'Argentina',
        ]);
        
        $brasil = Pais::create([
                    'id' => '2',
                    'nombre' => 'Brasil',
        ]);
        
        $paraguay = Pais::create([
                    'id' => '3',
                    'nombre' => 'Paraguay',
        ]);
        
        $chile = Pais::create([
                    'id' => '4',
                    'nombre' => 'Chile',
        ]);
        
        $uruguay = Pais::create([
                    'id' => '5',
                    'nombre' => 'Uruguay',
        ]);
               
    }

}


