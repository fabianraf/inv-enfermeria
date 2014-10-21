<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasControlHigiene extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_control_higiene', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('etiqueta_id');
			$table->integer('empleado_id');
			$table->integer('cumple');
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
		Schema::drop('encuestas_control_higiene');
	}

}
