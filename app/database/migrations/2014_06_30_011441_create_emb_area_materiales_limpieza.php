<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmbAreaMaterialesLimpieza extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emb_materiales_limpieza', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pregunta');
			$table->string('higiene');			
			$table->string('estado');
			$table->string('adecuado');
			$table->string('funciona');
			$table->string('mantenimiento');
			$table->integer('no_existe');
			$table->string('cumple');
			$table->integer('encuesta_manipulacion_bares_id')->unsigned();
			$table->foreign('encuesta_manipulacion_bares_id')
				->references('id')->on('encuestas_manipulacion_bares');
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
		Schema::drop('emb_materiales_limpieza');
	}

}
