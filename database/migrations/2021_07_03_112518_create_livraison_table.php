<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLivraisonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('livraison', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->enum('etat', array('S','E','H','L','O'))->default('S');
			$table->enum('mode', array('Y','N'))->nullable();
			$table->text('zone')->nullable();
			$table->integer('date_estimation')->nullable();
			$table->bigInteger('agriculteur_id')->unsigned();
			$table->bigInteger('transport_id')->unsigned()->index('trasport_id');
			$table->bigInteger('livreur_id')->unsigned()->nullable()->index('livraison_livreur');
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
		Schema::drop('livraison');
	}

}
