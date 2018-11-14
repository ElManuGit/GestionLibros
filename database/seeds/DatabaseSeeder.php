<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(PaisesSeeder::class);
        $this->call(ProvinciasSeeder::class);
        $this->call(LocalidadesSeeder::class);
        $this->call(IdiomasSeeder::class);
        $this->call(GenerosSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AutoresSeeder::class);
        $this->call(EditorialesSeeder::class);
        $this->call(ProveedoresSeeder::class);
        $this->call(LibrosSeeder::class);
        $this->call(Autor_LibroSeeder::class);
    }
}