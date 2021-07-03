<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commande', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->enum('methode', array('E','P'))->default('E');
			$table->text('description')->nullable();
			$table->bigInteger('client_id')->unsigned()->index('client_id');
			$table->bigInteger('ferme_id')->unsigned()->nullable()->index('commande_ferme');
			$table->bigInteger('livraison_id')->unsigned()->nullable()->index('livraison_id');
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
		Schema::drop('commande');
	}

}
