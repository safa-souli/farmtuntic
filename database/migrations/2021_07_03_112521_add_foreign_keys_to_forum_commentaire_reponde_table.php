<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToForumCommentaireRepondeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_commentaire_reponde', function(Blueprint $table)
		{
			$table->foreign('forum_commentaire_id', 'forum_commentaire_id')->references('id')->on('forum_commentaire')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('client_id', 'repondre_commentaire_utilisateur_id')->references('id')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_commentaire_reponde', function(Blueprint $table)
		{
			$table->dropForeign('forum_commentaire_id');
			$table->dropForeign('repondre_commentaire_utilisateur_id');
		});
	}

}
