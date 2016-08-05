<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seminarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre_seminario',300);
			$table->string('institucion',300);
			$table->date('fecha');
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
		Schema::drop('seminarios');
	}

}
