<?php

use Illuminate\Database\Seeder;

class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("perfiles")->insert([
            [
             "id" => 1,
             "permiso" => "Admin",
             ],
             [
             "id" => 2,
             "permiso" => "Usuario",
             ],
 
         ]);
         
    }
}
