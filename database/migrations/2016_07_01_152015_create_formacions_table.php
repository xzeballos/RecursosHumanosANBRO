<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('carrera',300);
			$table->string('grado_obtenido',300);
			$table->date('fecha');
			$table->string('institucion',500);
			$table->string('ciudad',100);
			$table->string('pais',100);
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
		Schema::drop('formacions');
	}

}
