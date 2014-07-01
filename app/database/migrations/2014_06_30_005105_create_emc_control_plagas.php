<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmcControlPlagas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emc_control_plagas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');
			$table->string('frecuencia');			
			$table->date('fecha_ultima_aplicacion');
			$table->date('fecha_a_aplicarse');
			$table->string('cumple');
			$table->integer('no_aplica');
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
		Schema::drop('emc_control_plagas');
	}

}
