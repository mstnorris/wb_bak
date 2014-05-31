<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groups', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->string('wbid', 16)->primary();
            $table->string('module_wbid', 16);
            $table->string('name');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('module_wbid')
                ->references('wbid')->on('modules')
                ->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('groups');
	}

}
