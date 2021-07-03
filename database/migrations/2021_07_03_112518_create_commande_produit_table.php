<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandeProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commande_produit', function(Blueprint $table)
		{
			$table->bigInteger('commande_id')->unsigned();
			$table->bigInteger('produit_id')->unsigned()->index('produit_order_id');
			$table->enum('etat', array('R','A','P','E','L'))->nullable()->default('E');
			$table->integer('quantite')->nullable()->default(1);
			$table->timestamps();
			$table->primary(['commande_id','produit_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commande_produit');
	}

}
