<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProduitNoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produit_note', function(Blueprint $table)
		{
			$table->foreign('produit_id', 'produit_note')->references('id')->on('produit')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('client_id', 'produit_note_utilisateur')->references('id')->on('client')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produit_note', function(Blueprint $table)
		{
			$table->dropForeign('produit_note');
			$table->dropForeign('produit_note_utilisateur');
		});
	}

}
