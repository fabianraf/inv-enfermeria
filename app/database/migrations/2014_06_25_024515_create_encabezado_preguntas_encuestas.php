<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncabezadoPreguntasEncuestas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encabezado_preguntas_encuestas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('encabezado')->nullable();
			$table->string('subgrupo')->nullable();
			$table->string('pregunta')->nullable();
			$table->integer('tipo_encuesta_id')->unsigned();
			$table->foreign('tipo_encuesta_id')
				->references('id')->on('tipo_encuestas');
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
		Schema::drop('encabezado_preguntas_encuestas');
	}

}
