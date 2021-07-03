<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommandeProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commande_produit', function(Blueprint $table)
		{
			$table->foreign('commande_id', 'commande_order_id')->references('id')->on('commande')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('produit_id', 'produit_order_id')->references('id')->on('produit')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('commande_produit', function(Blueprint $table)
		{
			$table->dropForeign('commande_order_id');
			$table->dropForeign('produit_order_id');
		});
	}

}
