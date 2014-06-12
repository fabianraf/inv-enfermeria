<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatosToUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios', function(Blueprint $table) {
			$table->string('cedula',10);
			$table->string('nombre');
			$table->string('apellido');
			$table->string('direccion');
			$table->string('telefono');
			$table->date('fecha_nacimiento');
			$table->string('genero',1);
			$table->string('personas_hogar');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuarios', function(Blueprint $table) {
			
		});
	}

}
