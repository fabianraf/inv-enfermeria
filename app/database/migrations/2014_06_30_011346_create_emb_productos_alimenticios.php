<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbProductosAlimenticios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emb_productos_alimenticios', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');
			$table->string('lugar_adquirido');			
			$table->string('registro_sanitario');
			$table->date('fecha_caducidad');
			$table->string('sello_control');
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
		Schema::drop('emb_productos_alimenticios');
	}

}
