<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFermeAvisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ferme_avis', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('avis', 500);
			$table->integer('etoiles')->nullable()->default(0);
			$table->bigInteger('client_id')->unsigned()->index('client_id');
			$table->bigInteger('ferme_id')->unsigned()->index('ferme_id');
			$table->timestamps();
			$table->unique(['client_id','ferme_id'], 'client_id_ferme_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ferme_avis');
	}

}
