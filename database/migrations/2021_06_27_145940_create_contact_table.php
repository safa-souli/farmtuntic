<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->enum('objet', array('O','S','A','G','L'))->nullable()->default('O');
			$table->string('nom', 50)->nullable();
			$table->string('prenom', 50)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('telephone', 50)->nullable();
			$table->string('fichier', 50)->nullable();
			$table->text('message')->nullable();
			$table->bigInteger('client_id')->nullable()->index('Index2');
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
		Schema::drop('contact');
	}

}
