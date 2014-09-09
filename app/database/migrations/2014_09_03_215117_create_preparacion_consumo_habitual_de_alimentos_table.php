<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreparacionConsumoHabitualDeAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preparacion_consumo_habitual_de_alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('consumo_habitual_de_alimentos_id');
			$table->string('nombre_alimento');
			$table->string('forma_de_coccion');
			$table->string('cantidad_en_medidas_caseras');
			$table->integer('numero_de_porciones');
			$table->string('grupo_de_alimentos');
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
		Schema::drop('preparacion_consumo_habitual_de_alimentos');
	}

}
