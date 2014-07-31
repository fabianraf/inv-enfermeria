<?php
class TipoDeAlimentosBaresTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing rows are deleted !!!
        DB::table('tipo_de_alimentos_bares')->delete();

        TipoDeAlimentoBares::create(array(
            'nombre'  => 'Snacks',
            'posicion' => '1'
        ));

        TipoDeAlimentoBares::create(array(
            'nombre'  => 'Chocolates',
            'posicion' => '2'
        ));

         TipoDeAlimentoBares::create(array(
            'nombre'  => 'Galletas',
            'posicion' => '3'
        ));

        TipoDeAlimentoBares::create(array(
            'nombre'  => 'Helados',
            'posicion' => '4'
        ));

        TipoDeAlimentoBares::create(array(
            'nombre'  => 'Bebidas azucaradas',
            'posicion' => '5'
        ));

        TipoDeAlimentoBares::create(array(
            'nombre'  => 'Bebidas calientes',
            'posicion' => '6'
        ));
        TipoDeAlimentoBares::create(array(
            'nombre'  => 'Bebidas lácteas',
            'posicion' => '7'
        ));

        TipoDeAlimentoBares::create(array(
            'nombre'  => 'Productos procesados',
            'posicion' => '8'
        ));       
    }
}