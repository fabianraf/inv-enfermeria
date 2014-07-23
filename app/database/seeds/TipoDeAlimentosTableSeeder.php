<?php
class TipoDeAlimentosTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing rows are deleted !!!
        DB::table('tipo_de_alimentos')->delete();

        TipoDeAlimento::create(array(
            'nombre'  => 'Cereales',
            'posicion' => '1'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Tubérculos blancos y raíces',
            'posicion' => '2'
        ));

         TipoDeAlimento::create(array(
            'nombre'  => 'Verduras de hoja verde oscuro',
            'posicion' => '3'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Otras verduras',
            'posicion' => '4'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Frutas ricas en vitamina A',
            'posicion' => '5'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Otras frutas',
            'posicion' => '6'
        ));
        TipoDeAlimento::create(array(
            'nombre'  => 'Jugos de frutas',
            'posicion' => '7'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Carnes',
            'posicion' => '8'
        ));

         TipoDeAlimento::create(array(
            'nombre'  => 'Huevos',
            'posicion' => '9'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Pescado y mariscos',
            'posicion' => '10'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Leguminosas, nueces y semillas',
            'posicion' => '11'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Leche y productos lácteos',
            'posicion' => '12'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Plátanos',
            'posicion' => '13'
        ));

         TipoDeAlimento::create(array(
            'nombre'  => 'Aceites y grasas',
            'posicion' => '14'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Productos azucarados',
            'posicion' => '15'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Bebidas azucaradas',
            'posicion' => '16'
        ));

        TipoDeAlimento::create(array(
            'nombre'  => 'Snacks',
            'posicion' => '17'
        ));
    }
}