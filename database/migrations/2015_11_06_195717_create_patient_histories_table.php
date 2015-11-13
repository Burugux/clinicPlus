<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientHistoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient_histories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('patient_id')->unsigned();
			$table->text('patient_history');
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
		Schema::drop('patient_histories');
	}

}
