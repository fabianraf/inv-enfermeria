<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIngredientesPreparacionConsumoHabitualDeAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ingredientes_preparacion_consumo_habitual_de_alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('preparacion_consumo_habitual_de_alimentos_id');
			$table->string('ingrediente');
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
		Schema::drop('ingredientes_preparacion_consumo_habitual_de_alimentos');
	}

}
