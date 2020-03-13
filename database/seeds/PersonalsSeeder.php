<?php

use Illuminate\Database\Seeder;

class PersonalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personales")->insert([
            [
                "id" => 1,
                "nombre" => "Guia",
                "descripcion"=>"'MARTIN GUTIERREZ Guía oficial de turismo de la Comunidad de Madrid con ocho años de experiencia, capacitación pedagógica y amplio conocimiento del patrimonio histórico-artístico. Experto en la aplicación de las nuevas tecnologías en mi labor profesional y en la gestión y acompañamiento de grupos. Capacidad para adecuar las visitas turísticas a los conocimientos, exigencias, inquietudes y edades de los clientes.'",
                "sueldo" =>25000,
                "anio_ingreso" =>2019 ,
                "imagen" => "personal/Guia/Guia.jpg",
                ],
                [
                    "id" => 2,
                    "nombre" => "Jardinero",
                    "descripcion"=>"SAMUEL SANCHEZ Especialista en cuidado de césped, con amplia experiencia y elevados índices de satisfacción de clientes. Dominio de los diversos tratamientos químicos para césped y de los efectos que éstos pueden causar en tierra, hierba y árboles. Capacitado, tanto para trabajar de manera independiente, como para integrarse en un equipo de jardinería.'",
                    "sueldo" =>30000,
                    "anio_ingreso" =>2014 ,
                    "imagen" => "personal/Jardinero/Jardinero.jpg",
                    ],
                    [
                        "id" => 3,
                        "nombre" => "Limpieza",
                        "descripcion"=>"MARIO HERNANDEZ Soy un experto limpiador con vocación de ofrecer trabajos de limpieza exhaustivos y de calidad, amoldándome siempre a las necesidades del cliente y a las peculiaridades del domicilio en los que se realiza el servicio. Formación -Título Profesional Básico en Alojamiento y Lavandería. Centro de Formación Profesional Miguel de Servet (1999). -Título de Educación Secundaria Obligatoria. IES Miguel Villanueva (1998). -Curso Limpieza Superficies delicadas. Instituto Nacional de Empleo (2005).",
                        "sueldo" =>45000,
                        "anio_ingreso" =>2010 ,
                        "imagen" => "personal/Limpieza/Limpieza.jpg",
                        ],
                        [
                            "id" => 4,
                            "nombre" => "Transportista",
                            "descripcion"=>"NICOLÁS VALDEÓN Transportista con permiso C y CAP. Diligente, eficiente y con disponibilidad para trabajar en fines de semana y festivos. Soy muy escrupuloso al volante, trabajando siempre desde la aplicación exhaustiva de las normas de circulación vigentes.",
                            "sueldo" =>70000,
                            "anio_ingreso" =>2006 ,
                            "imagen" => "personal/Transportista/Transportista.jpg",
                            ],
            ]);

   
    }
}
