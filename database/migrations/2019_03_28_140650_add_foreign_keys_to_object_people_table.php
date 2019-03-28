<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToObjectPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('object_people', function(Blueprint $table)
		{
			$table->foreign('object_id', 'c_fk_object_people_object_id')->references('id')->on('objects')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('people_id', 'c_fk_object_people_people_id')->references('id')->on('people')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('object_people', function(Blueprint $table)
		{
			$table->dropForeign('c_fk_object_people_object_id');
			$table->dropForeign('c_fk_object_people_people_id');
		});
	}

}
