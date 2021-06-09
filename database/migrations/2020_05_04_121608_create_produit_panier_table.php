<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitPanierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produit_panier', function(Blueprint $table)
		{
			$table->bigInteger('panier_id')->unsigned()->index('panier_id');
			$table->bigInteger('produit_id')->unsigned()->index('produit_id');
			$table->timestamps();
			$table->primary(['panier_id','produit_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produit_panier');
	}

}
