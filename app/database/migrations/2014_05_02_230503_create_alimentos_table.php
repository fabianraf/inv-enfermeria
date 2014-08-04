<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('porciones')->nullable();
			$table->string('url_foto')->nullable();
			$table->integer('tipo_de_alimento_id')->unsigned();
			$table->timestamps();
			$table->foreign('tipo_de_alimento_id')
				->references('id')->on('tipo_de_alimentos')
				->onDelete('set null');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alimentos');
	}

}
