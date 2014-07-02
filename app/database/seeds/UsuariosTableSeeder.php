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

        User::create(array(
            'email'  => 'renato.echeverria@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Renato', 
            'apellido' => 'Echeverria',
            'telefono' => '123456',
            'cedula' => '1234567890'
        ));

        User::create(array(
            'email'  => 'pablo.almeida@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Juan Pablo', 
            'apellido' => 'Almeida',
            'telefono' => '123456',
            'cedula' => '0987654321'
        ));

        User::create(array(
            'email'  => 'fabian.mena@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Fabian', 
            'apellido' => 'Mena',
            'telefono' => '123456',
            'cedula' => '1122334455'
        ));

        User::create(array(
            'email'  => 'lourdes.bustos@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Lourdes', 
            'apellido' => 'Bustos',
            'telefono' => '123456',
            'cedula' => '5544332211'
        ));

        User::create(array(
            'email'  => 'lourdes.bustos@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Fabian', 
            'apellido' => 'Aguirre',
            'telefono' => '123456',
            'cedula' => '1111111111'
        ));

        User::create(array(
            'email'  => 'lourdes.bustos@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Jose', 
            'apellido' => 'Valdiviezo',
            'telefono' => '123456',
            'cedula' => '2222222222'
        ));

        User::create(array(
            'email'  => 'lourdes.bustos@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Gabriela', 
            'apellido' => 'Rosero',
            'telefono' => '123456',
            'cedula' => '3333333333'
        ));

        User::create(array(
            'email'  => 'lourdes.bustos@inv-enf.com',
            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
            'tipo' => 'estudiante',
            'nombre' => 'Andres', 
            'apellido' => 'Moreno',
            'telefono' => '123456',
            'cedula' => '4444444444'
        ));

    }
}