<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTiempoConsumoBares extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_tiempo_consumo_bares', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('encuestas_alimentos_bares_id');
			$table->integer('tiempo_comida_id');			
			$table->foreign('encuestas_alimentos_bares_id')->references('id')->on('encuestas_alimentos_bares');
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
		Schema::drop('encuestas_tiempo_consumo_bares');
	}

}
