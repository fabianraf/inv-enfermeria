<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInterpretacionesToAntropometrias extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('antropometrias', function(Blueprint $table) {
			$table->string('interpretacion_imc')->nullable();
			$table->string('interpretacion_indice_cintura_cadera')->nullable();
			$table->string('interpretacion_cmb')->nullable();
			$table->string('interpretacion_pliegue_tricipital')->nullable();
		});
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
