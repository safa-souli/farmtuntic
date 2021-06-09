<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForumCommentaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_commentaire', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('commentaire', 65535)->nullable();
			$table->bigInteger('forum_id')->unsigned()->index('forum_commentaire');
			$table->bigInteger('client_id')->unsigned()->index('forum_commentaire_utilisateur');
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
		Schema::drop('forum_commentaire');
	}

}
