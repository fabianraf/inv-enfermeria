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

		$this->call('UsuariosTableSeeder');
		$this->call('TipoDeAlimentosBaresTableSeeder');
		$this->call('TipoDeAlimentosTableSeeder');
		$this->call('AlimentosBaresTableSeeder');
		$this->call('AlimentosTableSeeder');
		$this->call('TiemposComidaTableSeeder');		
		$this->call('TipoEncuestasTableSeeder');
		$this->call('EncabezadoPreguntasEncuestasTableSeeder');
		

	}

}
