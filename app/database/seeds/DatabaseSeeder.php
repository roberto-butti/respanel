<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 $users = array();
		require(__DIR__."/my_array_data.php");

		Eloquent::unguard();
 		DB::table('resource')->delete();
 		foreach ($users as $key => $value) {
	 		$user = Resource::create(
	 			array(
	 				'first_name' => $value[0],
	 				'last_name' => $value[1],
	 				'email' => $value[2],
	 				"profile" => $value[3],
	 				"contract" => $value[4]
	 			)
	 		);
 		}
		DB::table('project')->delete();
 		foreach ($projects as $key => $value) {
	 		$project = Project::create(
	 			array(
	 				'name' => $value[0],
	 				'customer' => $value[1],
	 				'description' => $value[2],
	 				"projectmanager" => $value[3]
	 			)
	 		);
 		}

		DB::table('activity')->delete();
 		foreach ($activities as $key => $value) {
	 		$project = Activity::create(
	 			array(
					"date" => $value[0],
					"hours" => $value[1],
					"percent" => $value[2],
					"allocation" => $value[3],
					"resource_id" => $value[4],
					"project_id" => $value[5],
	 			)
	 		);
 		}


		// $this->call('UserTableSeeder');
	}

}
