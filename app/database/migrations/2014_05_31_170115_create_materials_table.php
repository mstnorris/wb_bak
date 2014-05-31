<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materials', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->string('wbid', 16)->primary();
            $table->string('group_wbid', 16);
            $table->string('name');
            $table->text('description');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('group_wbid')
                ->references('wbid')->on('groups')
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
		Schema::drop('materials');
	}

}
