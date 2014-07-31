<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBioquimicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bioquimicas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('usuario_id');
			$table->float('wbc');
			$table->float('neutrofilos');
			$table->float('linfocitos');
			$table->float('monocitos');
			$table->float('eosinofilos');
			$table->float('basofilos');
			$table->float('linfocitos_atipicos');
			$table->float('celulas_grandes_inmaduras');
			$table->float('rbc');
			$table->float('hgb');
			$table->float('hct');
			$table->float('rdw');
			$table->float('plt');
			$table->float('mch');
			$table->float('mchc');
			$table->float('mcv');
			$table->float('colesterol');
			$table->float('hdl_colesterol');
			$table->float('trigliceridos');
			$table->float('glucosa_ayunas');
			$table->float('ldl_colesterol');
			$table->float('hbsag');
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
		Schema::drop('bioquimicas');
	}

}
