<?php

use Illuminate\Database\Seeder;

class Autor_LibroSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('autor_libro')->insert([
            'id' => '1',
            'libro_id' => '1',
            'autor_id' => '1',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ]);
    }

}
