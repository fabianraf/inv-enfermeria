<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncuestasManipulacionComedoresProductosAlimenticios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_manipulacion_comedores_productos_alimenticios', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('empresa_id');
			$table->integer('etiqueta_id');
			$table->string("lugar_adquirido")->nullable();
			$table->string("registro_sanitario")->nullable();
			$table->date("fecha_de_caducidad")->nullable();
			$table->string("sello_de_control")->nullable();
			$table->boolean('cumple')->nullable();
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
		Schema::drop('encuestas_manipulacion_comedores_productos_alimenticios');
	}

}
