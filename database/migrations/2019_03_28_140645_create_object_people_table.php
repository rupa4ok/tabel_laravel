<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjectPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('object_people', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('people_id')->unsigned()->nullable()->index('index_foreignkey_object_people_people');
			$table->integer('object_id')->unsigned()->nullable()->index('index_foreignkey_object_people_object');
			$table->float('koef', 10, 0)->default(1);
			$table->unique(['object_id','people_id'], 'UQ_becf3631861b324883f9082b20cf3ed02914823f');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('object_people');
	}

}
