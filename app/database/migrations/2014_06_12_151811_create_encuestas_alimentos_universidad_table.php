<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasAlimentosUniversidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas_alimentos_universidad', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('usuario_id');
			$table->integer('alimento_id');
			$table->integer('frecuencia');
			$table->integer('num_porciones');
			$table->foreign('usuario_id')->references('id')->on('usuarios');
			$table->foreign('alimento_id')->references('id')->on('alimentos');
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
		Schema::drop('encuestas_alimentos_universidad');
	}

}
