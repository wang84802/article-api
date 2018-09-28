<?php

use Illuminate\Database\Seeder;
use App\User;

class WangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $faker =\Faker\Factory::create();
	    
	    $token = str_random(60);

	    User::create([
		'id' => '14',
		'name' => 'Wang',
		'email' => 'wang84802@gmail.com',
		'password' => 'test123',
		'api_token' => $token,
	    ]);
    }
}
