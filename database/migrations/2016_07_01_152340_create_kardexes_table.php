<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKardexesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kardexes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('item');
			$table->date('fecha_ingreso');
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
		Schema::drop('kardexes');
	}

}
