<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('universities', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->string('wbid', 16)->primary();
            $table->string('ucas_code', 3)->unique();
            $table->string('name')->unique();
            $table->string('web');
            $table->string('telephone');
            $table->string('email');
            $table->string('lat');
            $table->string('long');
            $table->string('colour_theme');
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
		Schema::drop('universities');
	}

}
