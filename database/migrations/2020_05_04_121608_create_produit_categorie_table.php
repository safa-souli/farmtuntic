<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitCategorieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produit_categorie', function(Blueprint $table)
		{
			$table->bigInteger('produit_id')->unsigned()->index('produit_id');
			$table->integer('categorie_id')->unsigned()->index('categorie_id');
			$table->primary(['produit_id','categorie_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produit_categorie');
	}

}
