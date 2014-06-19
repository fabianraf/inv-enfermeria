<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TipoDeAlimentosBaresTableSeeder');
		$this->call('TipoDeAlimentosTableSeeder');
		$this->call('AlimentosBaresTableSeeder');
		$this->call('AlimentosTableSeeder');
		$this->call('TiemposComidaTableSeeder');
		$this->call('UsuariosTableSeeder');
		

	}

}
