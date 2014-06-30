<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmcProductosAlimenticios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emc_productos_alimenticios', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');
			$table->string('lugar_adquirido');			
			$table->string('registro_sanitario');
			$table->date('fecha_caducidad');
			$table->string('sello_control');
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
		Schema::drop('emc_productos_alimenticios');
	}

}
