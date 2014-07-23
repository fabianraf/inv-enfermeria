<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatosToAlimentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alimentos', function(Blueprint $table) {
			$table->integer('gramos')->nullable();
			$table->float('humedad')->nullable();
			$table->float('calorias')->nullable();
			$table->float('proteinas')->nullable();
			$table->float('hidratos_de_c')->nullable();
			$table->float('fibra_dietaria')->nullable();
			$table->float('lipidos')->nullable();
			$table->float('acidos_grasos_saturados')->nullable();
			$table->float('acidos_grasos_monoinsat')->nullable();
			$table->float('acidos_grasos_polinsat')->nullable();
			$table->float('colesterol')->nullable();
			$table->float('n6')->nullable();
			$table->float('n3')->nullable();
			$table->float('caroteno')->nullable();
			$table->float('retinol_re')->nullable();
			$table->float('vit_a_total_re')->nullable();
			$table->float('vit_b1')->nullable();
			$table->float('vit_b2')->nullable();
			$table->float('niacina')->nullable();
			$table->float('vit_b6')->nullable();
			$table->float('vit_b12')->nullable();
			$table->float('folatos')->nullable();
			$table->float('acido_pantogenico')->nullable();
			$table->float('vit_c')->nullable();
			$table->float('vit_e')->nullable();
			$table->float('calcio')->nullable();
			$table->float('cobre')->nullable();
			$table->float('hierro')->nullable();
			$table->float('magnesio')->nullable();
			$table->float('fosforo')->nullable();
			$table->float('potasio')->nullable();
			$table->float('selenio')->nullable();
			$table->float('sodio')->nullable();
			$table->float('zinc')->nullable();
			$table->float('cenizas')->nullable();
			$table->float('acido_folico')->nullable();
			$table->float('fraccion_comestible')->nullable();
			$table->float('carbohidratos_disponibles')->nullable();
			$table->float('fibra_cruda')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alimentos', function(Blueprint $table) {
			
		});
	}

}
