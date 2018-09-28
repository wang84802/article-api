<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    //User::truncate();

	    $faker =\Faker\Factory::create();

	    $password = Hash::make('toptal');

	    /*User::create([
	    	'name' => 'Admininstrator',
		'email' => 'admin@est.com',
		'password' => $password,
	    ]);*/

	    for($i = 0; $i < 10; $i++){
		User::create([
		    'name' => $faker->name,
	            'email' => $faker->email,
		    'password' => $password,
            'api_token' => str_random(60),
		]);	
	    }

    }
}
