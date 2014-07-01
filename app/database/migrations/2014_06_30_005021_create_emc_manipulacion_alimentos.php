<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmcManipulacionAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emc_manipulacion_alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');
			$table->string('cumple');			
			$table->integer('no_se_pudo_observar');
			$table->integer('no_hay_termometro');			
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
		Schema::drop('emc_manipulacion_alimentos');
	}

}

