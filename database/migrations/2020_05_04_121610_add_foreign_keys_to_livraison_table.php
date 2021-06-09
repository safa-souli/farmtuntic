<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLivraisonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('livraison', function(Blueprint $table)
		{
			$table->foreign('transport_id', 'livraison_transport')->references('matricule')->on('transport')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('livraison', function(Blueprint $table)
		{
			$table->dropForeign('livraison_transport');
		});
	}

}
