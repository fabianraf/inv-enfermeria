<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTiempoConsumoUniversidad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_tiempo_consumo_universidades', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('encuesta_alimentos_universidad_id');
			$table->integer('tiempo_comida_id');			
			$table->foreign('encuesta_alimentos_universidad_id')->references('id')->on('encuestas_alimentos_universidad');
			$table->foreign('tiempo_comida_id')->references('id')->on('tiempos_comida');
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
		Schema::drop('encuestas_tiempo_consumo_universidades');
	}

}