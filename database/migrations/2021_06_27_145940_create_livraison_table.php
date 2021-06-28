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
			$table->bigInteger('transport_id')->unsigned()->index('trasport_id');
			$table->timestamps();
			$table->time('delivery_at')->nullable();
			$table->time('delivery_on')->nullable();
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
