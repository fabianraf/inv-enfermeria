<?php
class TiemposComidaTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing rows are deleted !!!
        DB::table('tiempos_comida')->delete();

        TiemposComida::create(array(
            'nombre'  => 'Desayuno'
        ));

        TiemposComida::create(array(
            'nombre'  => '½ Mañana'
        ));

        TiemposComida::create(array(
            'nombre'  => 'Almuerzo'
        ));

        TiemposComida::create(array(
            'nombre'  => '½ Tarde'
        ));

        TiemposComida::create(array(
            'nombre'  => 'Merienda'
        ));

        
    }
}