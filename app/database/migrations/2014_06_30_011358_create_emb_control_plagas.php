<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbControlPlagas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emb_control_plagas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');
			$table->string('frecuencia');			
			$table->date('fecha_ultima_aplicacion');
			$table->date('fecha_a_aplicarse');
			$table->string('cumple');
			$table->integer('no_aplica');
			$table->integer('encuesta_manipulacion_bares_id')->unsigned();
			$table->foreign('encuesta_manipulacion_bares_id')
				->references('id')->on('encuestas_manipulacion_bares');
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
		Schema::drop('emb_control_plagas');
	}

}
