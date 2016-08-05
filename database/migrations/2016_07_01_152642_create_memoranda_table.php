<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemorandaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('memoranda', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('item');
			$table->integer('numero_memo');
			$table->string('referencia',200);
			$table->string('remite',300);
			$table->string('tipo',300);
			$table->string('descripcion',150);
			$table->string('codificacion',150);
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
		Schema::drop('memoranda');
	}

}
