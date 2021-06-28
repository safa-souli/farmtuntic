<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgriculteurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agriculteur', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->index('id');
			$table->text('domaine', 65535);
			$table->text('certificate', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agriculteur');
	}

}
