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

		$this->call('TipoDeAlimentosBaresTableSeeder');
		$this->call('TipoDeAlimentosTableSeeder');
		$this->call('AlimentosBaresTableSeeder');
		$this->call('AlimentosTableSeeder');
		$this->call('TiemposComidaTableSeeder');		
		$this->call('TipoEncuestasTableSeeder');
		$this->call('EncabezadoPreguntasEncuestasTableSeeder');
		$this->call('GruposAlimentosTableSeeder');
		$this->call('EtiquetasTableSeeder');
		$this->call('PerfilesUsuarioTableSeeder');
		$this->call('UsuariosTableSeeder');
		

	}

}
