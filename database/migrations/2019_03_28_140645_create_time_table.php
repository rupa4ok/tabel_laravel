<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('date', 191)->nullable();
			$table->string('mounth', 50)->nullable();
			$table->integer('year')->default(2018);
			$table->integer('nraboti')->nullable();
			$table->float('timework', 10, 0)->nullable();
			$table->integer('nrabotnik')->nullable();
			$table->integer('nprorab')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('time');
	}

}
