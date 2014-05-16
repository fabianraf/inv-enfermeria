<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentosBaresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alimentos_bares', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('porciones')->nullable();
			$table->string('url_foto')->nullable();
			$table->integer('tipo_de_alimento_bar_id')->unsigned();
			$table->timestamps();
			$table->foreign('tipo_de_alimento_bar_id')
				->references('id')->on('tipo_de_alimentos_bares')
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
		Schema::drop('alimentos_bares');
	}

}
