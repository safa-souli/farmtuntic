<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFermeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ferme', function(Blueprint $table)
		{
			$table->foreign('agriculteur_id', 'ferme_agriculteur')->references('id')->on('agriculteur')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ferme', function(Blueprint $table)
		{
			$table->dropForeign('ferme_agriculteur');
		});
	}

}
