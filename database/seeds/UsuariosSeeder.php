<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("es_AR");

        DB::table("users")->insert(
            [
                "id" => 1,
                'nombre' => "Agustin",
                'apellido' => "Vaccarezza",
                'email' => "agustin.vaccarezza@davinci.edu.ar",
                'usuario' => "agustin.vaccarezza",
                'password' => bcrypt("1234"),
                'id_perfil' => 1
            ]
        );
        for($i = 2; $i < 30; $i++):

            DB::table("users")->insert(
                [
                    "id" => $i,
                    'nombre' => $faker->firstName,
                    'apellido' => $faker->lastName,
                    'email' => $faker->freeEmail,
                    'usuario' => $faker->userName,
                    'password' => bcrypt("1234"),
                    'id_perfil' => 2
                    
                ]
            );

        endfor;

    }
}
