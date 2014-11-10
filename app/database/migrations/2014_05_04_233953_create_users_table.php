<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table) {
			$table->increments('id');
			$table->string("email");
			$table->string("password");
			$table->timestamps();
			$table->string('remember_token')->nullable();
			$table->string('cedula',10)->nullable();
			$table->string('nombre')->nullable();
			$table->string('apellido')->nullable();
			$table->string('direccion')->nullable();
			$table->string('telefono')->nullable();
			$table->date('fecha_nacimiento')->nullable();
			$table->string('genero',1)->nullable();
			$table->string('personas_hogar')->nullable();
			$table->string('tipo')->default('Activo');
			$table->boolean('antropometria')->default(false);
			$table->boolean('edito_perfil')->default(false);
			$table->boolean('bioquimica')->default(false);
			$table->boolean('tiene_consumo_habitual')->default(false);
			$table->boolean('acepto_disclaimer')->default(0);
			$table->string('carrera',10)->nullable();
			$table->integer('nivel')->nullable();		
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alimentos', function($table)
		{
		    $table->dropColumn('usuario_id');
		});
		Schema::drop('usuarios');
	}

}
