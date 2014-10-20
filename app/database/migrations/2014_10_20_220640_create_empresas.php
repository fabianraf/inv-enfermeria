<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresas', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('propietario')->nullable();
			$table->date('fecha')->nullable();
			$table->text('observaciones')->nullable();
			$table->string('codigo_empresa');
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
		Schema::drop('empresas');
	}

}
