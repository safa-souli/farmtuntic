<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivreurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('livreur', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('nom_entreprise', 65535);
			$table->text('adresse_entreprise', 65535);
			$table->string('telephone_entreprise', 15);
			$table->string('certificate', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('livreur');
	}

}
