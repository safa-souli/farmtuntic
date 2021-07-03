<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePanierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('panier', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('ipv4', 51);
			$table->bigInteger('client_id')->unsigned()->nullable()->index('utilisateur_id');
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
		Schema::drop('panier');
	}

}
