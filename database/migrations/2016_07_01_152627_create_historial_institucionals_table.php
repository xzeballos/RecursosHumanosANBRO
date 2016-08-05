<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialInstitucionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historial_institucionals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('item');
			$table->string('ciudad',300);
			$table->string('administracion',300);
			$table->string('cargo',300);
			$table->date('fecha_inicio');
			$table->date('fecha_fin');
			$table->integer('funcionario_cod_user')->unsigned();
			$table->foreign('funcionario_cod_user')->references('cod_user')->on('funcionarios');
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
		Schema::drop('historial_institucionals');
	}

}
