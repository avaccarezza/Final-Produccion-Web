<?php

use Illuminate\Database\Seeder;

class ExcursionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("excursiones")->insert([
            [
                "id" => 1,
                "nombre" => "Cabalgata",
                "descripcion"=>"Exploramos lugares a los que solo llegan nuestras guías.
                El Bosque Andino Patagónico es tan encantador como calmo:
                el escenario perfecto para conectarnos con la naturaleza y dejar la rutina atrás.",
                "precio" =>1125,
                "imagen" => "excursiones/Cabalgata/Cabalgata.jpg",
                ],
                [
                    "id" => 2,
                    "nombre" => "Feria",
                    "descripcion"=>"La Feria Regional Artesanal de El Bolsón ya se ha ganado un importante lugar entre las más conocidas y con mayor trayectoria de Sudamérica.",
                    "precio" =>525,
                    "imagen" => "excursiones/Feria/Feria.jpg",
                ],
                [
                    "id" => 3,
                    "nombre" => "Lagopuelo",
                    "descripcion"=>"El parque alberga el cristalino lago puelo y en él habitan 
                    especies en peligro de extinción como el pudá y el huemul. La reserva protege un entorno natural único y está en contacto con la frontera argentino-chilena.",
                    "precio" =>675,
                    "imagen" => "excursiones/Lagopuelo/Lagopuelo.jpg",
                ],
                [
                    "id" => 4,
                    "nombre" => "Piltriquitron",
                    "descripcion"=>"Sus miradores con vistas panorámicas, sus bosques abigarrados 
                    o una enérgica caminata de montaña son suficiente incentivo para subir al 'Piltri' hasta la altura que cada uno esté dispuesto.",
                    "precio" =>570,
                    "imagen" => "excursiones/Piltriquitron/Piltriquitron.jpg",
                ],
        ]);
    }
}
