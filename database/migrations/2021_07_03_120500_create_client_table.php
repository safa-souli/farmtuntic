<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->text('nom', 65535);
			$table->text('prenom', 65535);
			$table->date('datenai')->nullable();
			$table->enum('sexe', array('Femme','Homme'))->nullable();
			$table->string('telephone', 15)->nullable();
			$table->string('email', 100)->unique('mail');
			$table->enum('type', array('livreur','agriculteur','client'))->default('client');
			$table->string('adresse', 50)->nullable();
			$table->string('password', 100);
			$table->text('photo', 65535);
			$table->dateTime('email_verified_at')->nullable();
			$table->timestamps();
			$table->string('remember_token', 1000)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client');
	}

}
