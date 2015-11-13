<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTriagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient_triages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('patient_id')->unsigned();
			$table->integer('Age');
			$table->integer('Weight');
			$table->integer('Height');
			$table->integer('Bmi');
			$table->text('Allergies');
			$table->timestamps();
			
			$table->foreign('patient_id')
				  ->references('id')
				  ->on('patients');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patient_triages');
	}

}
