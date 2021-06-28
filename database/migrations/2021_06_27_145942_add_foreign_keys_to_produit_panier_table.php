<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProduitPanierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produit_panier', function(Blueprint $table)
		{
			$table->foreign('panier_id', 'panier_produit')->references('id')->on('panier')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('produit_id', 'produit_panier')->references('id')->on('produit')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produit_panier', function(Blueprint $table)
		{
			$table->dropForeign('panier_produit');
			$table->dropForeign('produit_panier');
		});
	}

}
