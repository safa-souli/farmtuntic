<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDemandeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('demande', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->enum('type', array('agriculteur','livreur'));
			$table->enum('etat', array('accepte','refuse','en attende'));
			$table->text('certificate', 65535)->nullable();
			$table->bigInteger('client_id')->unsigned()->nullable()->index('demande_client_id');
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
		Schema::drop('demande');
	}

}
