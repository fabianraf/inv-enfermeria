<?php
class TipoEncuestasTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing rows are deleted !!!
        DB::table('tipo_encuestas')->delete();

        TipoEncuestas::create(array(
            'nombre'  => 'CONTROL DE HIGIENE DEL PERSONAL DE BARES Y COMEDORES DE LA PUCE'
        ));

        TipoEncuestas::create(array(
            'nombre'  => 'CONTROL DE MANIPULACIÓN DE ALIMENTOS E HIGIENE DE LOS COMEDORES DE LA PUCE'
        ));

        TipoEncuestas::create(array(
            'nombre'  => 'CONTROL DE MANIPULACIÓN DE ALIMENTOS E HIGIENE DE LOS BARES DE LA PUCE'
        ));

    }
}