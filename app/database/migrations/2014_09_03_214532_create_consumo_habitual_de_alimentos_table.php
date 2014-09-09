<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsumoHabitualDeAlimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consumo_habitual_de_alimentos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('usuario_id');
			$table->string('tiempo_de_comida');
			$table->string('horario');
			$table->string('lugar');
			$table->decimal('gasto_diario', 5, 2);
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
		Schema::drop('consumo_habitual_de_alimentos');
	}

}
