<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEchEmpleado extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ech_empleado', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('cargo');			
			$table->integer('encuestas_control_higiene_id')->unsigned();
			$table->foreign('encuestas_control_higiene_id')
				->references('id')->on('encuestas_control_higiene');
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
		Schema::drop('ech_empleado');
	}

}
