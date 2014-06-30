<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasManipulacionBares extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_manipulacion_bares', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre_empresa');
			$table->string('nombre_propietario');
			$table->date('fecha');
			$table->integer('user_id')->unsigned();			
			$table->string('recomendaciones');
			$table->foreign('user_id')
				->references('id')->on('usuarios');
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
		Schema::drop('encuestas_manipulacion_bares');
	}

}
