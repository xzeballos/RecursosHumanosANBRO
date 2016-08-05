<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoMemorandumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_memorandums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipo',150);
			$table->string('descripcion',150);
			$table->string('codificacion',150);
			$table->boolean('activo');
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
		Schema::drop('tipo_memorandums');
	}

}
