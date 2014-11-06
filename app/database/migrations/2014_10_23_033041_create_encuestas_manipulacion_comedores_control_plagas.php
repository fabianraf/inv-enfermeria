<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncuestasManipulacionComedoresControlPlagas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_manipulacion_comedores_control_plagas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('empresa_id');
			$table->integer('etiqueta_id');
			$table->integer('frecuencia')->nullable();
			$table->date('fecha_ultima_aplicacion')->nullable();
			$table->date('fecha_a_aplicarse')->nullable();
			$table->integer('cumple')->nullable();
			$table->boolean('no_aplica')->nullable();
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
		Schema::drop('encuestas_manipulacion_comedores_control_plagas');
	}

}
