<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ChangeColumnTipeOnEncuestasAlimentosBares extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE encuestas_alimentos_bares ALTER COLUMN frecuencia TYPE FLOAT;');
		DB::statement('ALTER TABLE encuestas_alimentos_universidad ALTER COLUMN frecuencia TYPE FLOAT;');
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('encuestas_alimentos_bares');
	}

}
