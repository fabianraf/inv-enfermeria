<?php
class PerfilesUsuarioTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing rows are deleted !!!
        DB::table('perfiles_usuario')->delete();

        PerfilesUsuario::create(array(
            'nombre'  => 'Admin'
        ));

        PerfilesUsuario::create(array(
            'nombre'  => 'Estudiante'
        ));

        PerfilesUsuario::create(array(
            'nombre'  => 'Encuestador'
        ));        
    }
}