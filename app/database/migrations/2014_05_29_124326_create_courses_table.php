<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->string('wbid', 16)->primary();
            $table->string('school_wbid', 16);
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('school_wbid')
                ->references('wbid')->on('schools')
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
		Schema::drop('courses');
	}

}
