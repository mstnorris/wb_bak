<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->string('id', 16)->primary();
            $table->string('name');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('key', 11);
            $table->boolean('confirmed')->default(0);
            $table->string('remember_token', 100)->nullable();
			$table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
