<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntropometriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('antropometrias', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('usuario_id');
			$table->float('peso');
			$table->float('talla');
			$table->float('imc');
			$table->float('circunferencia_cintura');
			$table->float('circunferencia_cadera');
			$table->float('indice_cintura_cadera');
			$table->float('circunferencia_media_brazo');
			$table->float('porcentaje_cmb');
			$table->float('pliegue_bicipital');
			$table->float('pliegue_tricipital');
			$table->float('porcentaje_pt');
			$table->float('pliegue_subescapular');
			$table->float('pliegue_suprailiaco');
			$table->foreign('usuario_id')->references('id')->on('usuarios');			
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
		Schema::drop('antropometrias');
	}

}
