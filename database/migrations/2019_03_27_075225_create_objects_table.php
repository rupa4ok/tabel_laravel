<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObjectsTable extends Migration {
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 191)->nullable();
            $table->integer('year')->nullable();
            $table->string('mounth', 11)->nullable();
            $table->string('status');
            $table->integer('users_id')->unsigned()->nullable();
        });
    }
    
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('object');
    }
    
}
