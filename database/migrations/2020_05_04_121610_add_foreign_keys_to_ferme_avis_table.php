<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFermeAvisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ferme_avis', function(Blueprint $table)
		{
			$table->foreign('ferme_id', 'ferme_avis')->references('id')->on('ferme')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('client_id', 'ferme_avis_utilisateur')->references('id')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ferme_avis', function(Blueprint $table)
		{
			$table->dropForeign('ferme_avis');
			$table->dropForeign('ferme_avis_utilisateur');
		});
	}

}
