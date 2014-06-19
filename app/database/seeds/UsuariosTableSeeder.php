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
				
				for($i=0; $i < 20; $i++){
	        User::create(array(
	            'email'  => 'test'.$i.'@inv-enf.com',
	            'password' => '$2y$10$3XerjXiDpytspETyy.oEkuWLU/SsvIkFvv.SVW8goNFv61F/uXqCS',
							'tipo' => 'estudiante',
							'nombre' => 'Nombre'.$i, 
							'apellido' => 'Apellido'.$i,
							'telefono' => '123456'
	        ));
				}

        
    }
}