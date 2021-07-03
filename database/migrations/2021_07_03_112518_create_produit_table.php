<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produit', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('nom', 300);
			$table->integer('promotion')->nullable();
			$table->float('prix', 10, 0)->default(0);
			$table->text('image', 65535);
			$table->text('description');
			$table->text('caracteristics')->nullable();
			$table->integer('categorie_id')->unsigned()->nullable()->index('categorie_id');
			$table->bigInteger('ferme_id')->unsigned()->nullable()->index('ferme_id');
			$table->bigInteger('agriculteur_id')->unsigned()->nullable()->index('produit_agriculteur');
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
		Schema::drop('produit');
	}

}
