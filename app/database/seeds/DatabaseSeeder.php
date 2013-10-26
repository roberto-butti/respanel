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


		// $this->call('UserTableSeeder');
	}

}
