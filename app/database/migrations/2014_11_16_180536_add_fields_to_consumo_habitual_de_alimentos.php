<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddFieldsToConsumoHabitualDeAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('consumo_habitual_de_alimentos', function(Blueprint $table) {
			$table->integer('ingresado_por_usuario');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('consumo_habitual_de_alimentos', function(Blueprint $table) {
			
		});
	}

}
