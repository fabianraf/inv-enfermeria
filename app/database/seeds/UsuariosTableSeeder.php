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
            'perfiles_usuario_id' => 1,
			'nombre' => 'ADMINISTRADOR', 
			'apellido' => '',
			'telefono' => '9999999'
        ));

        User::create(array(
            'email'  => 'estudiante1@sivan-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
			'tipo' => 'estudiante',
            'perfiles_usuario_id' => 2,
			'nombre' => 'ESTUDIANTE', 
			'apellido' => '1',
			'telefono' => '9999999',
			'cedula' => '1717171717',
            'genero' => 'M'
        ));

        

    }
}