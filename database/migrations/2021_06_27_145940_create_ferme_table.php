<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFermeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ferme', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('nom', 65535);
			$table->text('image', 65535);
			$table->string('adresse', 50);
			$table->string('telephone', 50);
			$table->string('email', 50);
			$table->text('description', 65535);
			$table->bigInteger('agriculteur_id')->unsigned()->index('agriculteur_id');
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
		Schema::drop('ferme');
	}

}
