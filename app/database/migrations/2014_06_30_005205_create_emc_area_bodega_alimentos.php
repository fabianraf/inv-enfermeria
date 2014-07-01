<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmcAreaBodegaAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emc_area_bodega_alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');
			$table->string('higiene');			
			$table->string('estado');
			$table->string('ordenado');
			$table->string('adecuado');
			$table->string('funciona');
			$table->string('mantenimiento');
			$table->integer('no_existe');
			$table->string('cumple');
			$table->integer('encuesta_manipulacion_comedores_id')->unsigned();
			$table->foreign('encuesta_manipulacion_comedores_id')
				->references('id')->on('encuestas_manipulacion_comedores');
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
		Schema::drop('emc_area_bodega_alimentos');
	}

}
