<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommandeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commande', function(Blueprint $table)
		{
			$table->foreign('client_id', 'commande_client')->references('id')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('livraison_id', 'commande_livraison')->references('id')->on('livraison')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('produit_id', 'commande_produit')->references('id')->on('produit')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('commande', function(Blueprint $table)
		{
			$table->dropForeign('commande_client');
			$table->dropForeign('commande_livraison');
			$table->dropForeign('commande_produit');
		});
	}

}
