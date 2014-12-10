<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnNumeroDePorcionesOnIngredientesPreparacionConsumoHabitualDeAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE ingredientes_preparacion_consumo_habitual_de_alimentos ALTER COLUMN numero_de_porciones TYPE FLOAT;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
