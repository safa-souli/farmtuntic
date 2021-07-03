<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transport', function(Blueprint $table)
		{
			$table->bigInteger('matricule', true)->unsigned();
			$table->text('nom', 65535);
			$table->enum('type', array('Y','N'));
			$table->integer('quantite')->default(0);
			$table->string('image', 50)->default('default.jpg');
			$table->bigInteger('livreur_id')->unsigned()->index('livreur_id');
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
		Schema::drop('transport');
	}

}
