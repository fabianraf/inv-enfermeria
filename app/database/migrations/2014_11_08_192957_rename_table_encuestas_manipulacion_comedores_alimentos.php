<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RenameTableEncuestasManipulacionComedoresAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename('encuestas_manipulacion_comedores_alimentos', 'encuestas_manipulacion_alimentos');
		Schema::rename('encuestas_manipulacion_comedores_control_plagas', 'encuestas_manipulacion_control_plagas');
		Schema::rename('encuestas_manipulacion_comedores_productos_alimenticios', 'encuestas_manipulacion_productos_alimenticios');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::rename('encuestas_manipulacion_alimentos', 'encuestas_manipulacion_comedores_alimentos');
		Schema::rename('encuestas_manipulacion_control_plagas', 'encuestas_manipulacion_comedores_control_plagas');
		Schema::rename('encuestas_manipulacion_productos_alimenticios', 'encuestas_manipulacion_comedores_productos_alimenticios');
	}

}
