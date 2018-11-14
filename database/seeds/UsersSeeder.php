<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //Creacion de usuarios

        $user_1 = User::create([
                    'name' => 'Pablo Lezcano',
                    'email' => 'pablito@outlook.com',
                    'password' => bcrypt('123123'),
        ]);

        $user_2 = User::create([
                    'name' => 'Manuel',
                    'email' => 'manuelk.sv@gmail.com',
                    'password' => bcrypt('123123'),
        ]);
    }

}
