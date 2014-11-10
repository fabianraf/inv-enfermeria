<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RenameTableEncuestasManipulacionComedoresAreas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename('encuestas_manipulacion_comedores_areas', 'encuestas_manipulacion_areas');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::rename('encuestas_manipulacion_areas', 'encuestas_manipulacion_comedores_areas');
	}

}
