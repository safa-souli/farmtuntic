<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForumCommentaireRepondeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_commentaire_reponde', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('reponde', 65535)->nullable();
			$table->bigInteger('forum_commentaire_id')->unsigned()->index('forum_commentaire_id');
			$table->bigInteger('client_id')->unsigned()->index('repondre_commentaire_utilisateur_id');
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
		Schema::drop('forum_commentaire_reponde');
	}

}
