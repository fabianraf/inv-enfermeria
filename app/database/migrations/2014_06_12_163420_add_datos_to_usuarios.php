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
			$table->string('cedula',10)->nullable();
			$table->string('nombre')->nullable();
			$table->string('apellido')->nullable();
			$table->string('direccion')->nullable();
			$table->string('telefono')->nullable();
			$table->date('fecha_nacimiento')->nullable();
			$table->string('genero',1)->nullable();
			$table->string('personas_hogar')->nullable();
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
