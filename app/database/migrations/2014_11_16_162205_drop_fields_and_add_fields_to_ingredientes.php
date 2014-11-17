<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DropFieldsAndAddFieldsToIngredientes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ingredientes_preparacion_consumo_habitual_de_alimentos', function(Blueprint $table) {
			$table->integer('cantidad_en_medidas_caseras');
			$table->integer('numero_de_porciones');
			$table->string('grupo_de_alimentos');
		});

		Schema::table('preparacion_consumo_habitual_de_alimentos', function(Blueprint $table) {
			$table->dropColumn('cantidad_en_medidas_caseras');
			$table->dropColumn('numero_de_porciones');
			$table->dropColumn('grupo_de_alimentos');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ingredientes_preparacion_consumo_habitual_de_alimentos', function(Blueprint $table) {
			
		});
	}

}
