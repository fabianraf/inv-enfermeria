<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncuestasManipulacionComedoresAreas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_manipulacion_comedores_areas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('etiqueta_id');
			$table->integer('empresa_id');
			$table->string('codigo_encuesta');
			$table->boolean('esta_limpio')->nullable();
			$table->boolean('es_limpio')->nullable();
			$table->boolean('es_adecuado')->nullable();
			$table->boolean('esta_en_mantenimiento')->nullable();
			$table->boolean('no_existe')->nullable();
			$table->boolean('cumple')->nullable();
			$table->boolean('funciona')->nullable();
			$table->boolean('es_ordenado')->nullable();
			$table->string('codigo_area');
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
		Schema::drop('encuestas_manipulacion_comedores_areas');
	}

}
