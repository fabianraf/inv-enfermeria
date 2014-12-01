<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnCantidadEnMedidasCaserasOnIngredientesPreparacionConsumoHabitualDeAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE ingredientes_preparacion_consumo_habitual_de_alimentos ALTER COLUMN cantidad_en_medidas_caseras TYPE VARCHAR(50);');
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
