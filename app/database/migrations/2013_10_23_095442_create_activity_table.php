<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->integer('hours')->default(8); // 8 for a daywork
			$table->integer('percent')->default(100);
			$table->integer('allocation')->default(true); //allocation, preallocation
			$table->integer('resource_id'); //resource id
			$table->integer('project_id'); //project id
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity');
	}

}