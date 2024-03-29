<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modules', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->string('wbid', 16)->primary();
            $table->string('course_wbid', 16);
            $table->string('name');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('course_wbid')
                ->references('wbid')->on('courses')
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
		Schema::drop('modules');
	}

}
