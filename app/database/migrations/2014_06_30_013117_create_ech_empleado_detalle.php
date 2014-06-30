<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEchEmpleadoDetalle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ech_empleado_detalle', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');						
			$table->string('cumple');
			$table->integer('no_aplica');
			$table->integer('ech_empleado_id')->unsigned();
			$table->foreign('ech_empleado_id')
				->references('id')->on('ech_empleado');
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
		Schema::drop('ech_empleado_detalle');
	}

}
