<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToForumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum', function(Blueprint $table)
		{
			$table->foreign('client_id', 'utilisateur_annonce')->references('id')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum', function(Blueprint $table)
		{
			$table->dropForeign('utilisateur_annonce');
		});
	}

}
