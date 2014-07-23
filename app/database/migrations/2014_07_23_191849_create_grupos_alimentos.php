<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos_alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('codigo');						
			$table->string('nombre');
			$table->integer('porciones');
			$table->integer('cho');
			$table->integer('prot');
			$table->integer('gras');
			$table->integer('ckal');
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
		Schema::drop('grupos_alimentos');
	}

}
