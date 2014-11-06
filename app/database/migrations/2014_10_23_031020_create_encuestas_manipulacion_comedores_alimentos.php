<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncuestasManipulacionComedoresAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_manipulacion_comedores_alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('empresa_id');
			$table->integer('etiqueta_id');
			$table->integer('cumple')->nullable();
			$table->boolean('no_hay_termometro')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('encuestas_manipulacion_comedores_alimentos');
	}

}
