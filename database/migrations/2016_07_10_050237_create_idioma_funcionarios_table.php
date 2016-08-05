<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomaFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idioma_funcionarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('idioma');
			$table->string('institucion');
			$table->integer('idiomas_id')->unsigned();
			$table->foreign('idiomas_id')->references('id')->on('idiomas');
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
		Schema::drop('idioma_funcionarios');
	}

}
