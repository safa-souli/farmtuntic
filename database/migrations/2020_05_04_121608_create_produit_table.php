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
			$table->float('prix', 10, 0)->default(0);
			$table->integer('stock');
			$table->text('image', 65535);
			$table->text('description');
			$table->bigInteger('ferme_id')->unsigned()->index('ferme_id');
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
