<?php
class EtiquetasTableSeeder extends Seeder {
public function run()
	{
		DB::table('etiquetas')->delete();

        Etiqueta::create(array(
            'titulo'  => 'Usa uniforme completo',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 0
        ));
        Etiqueta::create(array(
            'titulo'  => 'Usa mandil limpio',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 1
        ));
        Etiqueta::create(array(
            'titulo'  => 'Usa gorro',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 2
        ));
        Etiqueta::create(array(
            'titulo'  => 'Usa mascarilla',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 3
        ));
        Etiqueta::create(array(
            'titulo'  => 'Usa guantes',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 4
        ));
        Etiqueta::create(array(
            'titulo'  => 'Usa desinfectante de manos',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 5
        ));
        Etiqueta::create(array(
            'titulo'  => 'Uñas cortas y limpias',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 6
        ));
        Etiqueta::create(array(
            'titulo'  => 'Uñas sin esmalte',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 7
        ));
        Etiqueta::create(array(
            'titulo'  => 'Sin maquillaje',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 8
        ));
        Etiqueta::create(array(
            'titulo'  => 'Pelo recogido',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 9
        ));
        Etiqueta::create(array(
            'titulo'  => 'Sin joyas',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 10
        ));
        Etiqueta::create(array(
            'titulo'  => 'Sin colonia',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 11
        ));
        Etiqueta::create(array(
            'titulo'  => 'Afeitado y sin bigote',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 12
        ));
        Etiqueta::create(array(
            'titulo'  => 'Carné de Salud actualizado',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 13
        ));
        Etiqueta::create(array(
            'titulo'  => 'Certificado de Vacuna Hepatitis',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 14
        ));
        Etiqueta::create(array(
            'titulo'  => 'A y B',
            'identificador' => 'encuesta_control_higiene_personal',
            'posicion' => 15
        ));

	}

}
