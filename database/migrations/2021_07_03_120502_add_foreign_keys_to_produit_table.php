<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produit', function(Blueprint $table)
		{
			$table->foreign('agriculteur_id', 'produit_agriculteur')->references('id')->on('agriculteur')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('categorie_id', 'produit_categorie')->references('id')->on('categorie')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('ferme_id', 'produit_ferme')->references('id')->on('ferme')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produit', function(Blueprint $table)
		{
			$table->dropForeign('produit_agriculteur');
			$table->dropForeign('produit_categorie');
			$table->dropForeign('produit_ferme');
		});
	}

}
