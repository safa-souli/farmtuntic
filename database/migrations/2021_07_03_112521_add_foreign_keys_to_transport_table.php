<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transport', function(Blueprint $table)
		{
			$table->foreign('livreur_id', 'transport_livreur')->references('id')->on('livreur')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transport', function(Blueprint $table)
		{
			$table->dropForeign('transport_livreur');
		});
	}

}
