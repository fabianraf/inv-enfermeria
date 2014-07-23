<?php
class GruposAlimentosTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing rows are deleted !!!
        DB::table('grupos_alimentos')->delete();

        GruposAlimentos::create(array(
            'codigo'  => 'LE',
            'nombre'  => 'Leche Entera',
            'porciones' => '1',
            'cho' => '12',
            'prot' => '8',
            'gras' => '8',
            'ckal' => '150',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'LSD',
            'nombre'  => 'Leche Semidescremada',
            'porciones' => '1',
            'cho' => '12',
            'prot' => '8',
            'gras' => '5',
            'ckal' => '120',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'LD',
            'nombre'  => 'Leche Descremada',
            'porciones' => '1',
            'cho' => '12',
            'prot' => '8',
            'gras' => '1',
            'ckal' => '90',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'V',
            'nombre'  => 'Verduras',
            'porciones' => '1',
            'cho' => '5',
            'prot' => '2',
            'gras' => '0',
            'ckal' => '25',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'F',
            'nombre'  => 'Frutas',
            'porciones' => '1',
            'cho' => '15',
            'prot' => '0',
            'gras' => '0',
            'ckal' => '60',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'AL',
            'nombre'  => 'Almidones',
            'porciones' => '1',
            'cho' => '15',
            'prot' => '2',
            'gras' => '5',
            'ckal' => '115',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'AZ',
            'nombre'  => 'Azúcares',
            'porciones' => '1',
            'cho' => '10',
            'prot' => '0',
            'gras' => '0',
            'ckal' => '40',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'C',
            'nombre'  => 'Carnes',
            'porciones' => '1',
            'cho' => '0',
            'prot' => '7',
            'gras' => '5',
            'ckal' => '45',
        ));

        GruposAlimentos::create(array(
            'codigo'  => 'G',
            'nombre'  => 'Grasas',
            'porciones' => '1',
            'cho' => '0',
            'prot' => '0',
            'gras' => '5',
            'ckal' => '45',
        ));
  
    }
}