<?php
class UsuariosTableSeeder extends Seeder {
public function run()
    {
        // !!! All existing users are deleted !!!
        DB::table('usuarios')->delete();

        User::create(array(
            'email'  => 'test@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
			'tipo' => 'admin',
			'nombre' => 'Test', 
			'apellido' => 'Apellido',
			'telefono' => '123456'
        ));

        User::create(array(
            'email'  => 'estudiante@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
			'tipo' => 'estudiante',
			'nombre' => 'Santiago', 
			'apellido' => 'Loyola',
			'telefono' => '123456',
			'cedula' => '1714810148'
        ));

    }
}