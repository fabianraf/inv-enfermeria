<?php
class UsuariosTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('usuarios')->delete();

        User::create(array(
            'email'  => 'admin@sivan-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
			'tipo' => 'admin',
			'nombre' => 'ADMINISTRADOR', 
			'apellido' => '',
			'telefono' => '9999999'
        ));

        User::create(array(
            'email'  => 'estudiante1@sivan-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
			'tipo' => 'estudiante',
			'nombre' => 'ESTUDIANTE', 
			'apellido' => '1',
			'telefono' => '9999999',
			'cedula' => '1717171717',
            'genero' => 'M'
        ));

        User::create(array(
            'email'  => 'estudiante2@sivan-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'ESTUDIANTE', 
            'apellido' => '2',
            'telefono' => '9999999',
            'cedula' => '0000000000',
            'genero' => 'M'
        ));

        User::create(array(
            'email'  => 'santiago.loyola@sivan-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Santiago', 
            'apellido' => 'Loyola',
            'telefono' => '9999999',
            'cedula' => '0000000000',
            'genero' => 'H'
        ));

        User::create(array(
            'email'  => 'fabian.aguirre@sivan-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Fabián', 
            'apellido' => 'Aguirre',
            'telefono' => '9999999',
            'cedula' => '0000000000',
            'genero' => 'M'
        ));

    }
}