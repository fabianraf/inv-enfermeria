<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInterpretacionesToBioquimica extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bioquimicas', function(Blueprint $table) {
			$table->string('interpretacion_wbc')->nullable();
			$table->string('interpretacion_neutrofilos')->nullable();
			$table->string('interpretacion_linfocitos')->nullable();
			$table->string('interpretacion_monocitos')->nullable();
			$table->string('interpretacion_eosinofilos')->nullable();
			$table->string('interpretacion_basofilos')->nullable();
			$table->string('interpretacion_linfocitos_atipicos')->nullable();
			$table->string('interpretacion_celulas_grandes_inmaduras')->nullable();
			$table->string('interpretacion_rbc')->nullable();
			$table->string('interpretacion_hgb')->nullable();
			$table->string('interpretacion_hct')->nullable();
			$table->string('interpretacion_rdw')->nullable();
			$table->string('interpretacion_plt')->nullable();
			$table->string('interpretacion_mch')->nullable();
			$table->string('interpretacion_mchc')->nullable();
			$table->string('interpretacion_mcv')->nullable();
			$table->string('interpretacion_colesterol')->nullable();
			$table->string('interpretacion_hdl_colesterol')->nullable();
			$table->string('interpretacion_trigliceridos')->nullable();
			$table->string('interpretacion_ldl_colesterol')->nullable();
			$table->string('interpretacion_glucosa_ayunas')->nullable();
			$table->string('interpretacion_hbsag')->nullable();
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
