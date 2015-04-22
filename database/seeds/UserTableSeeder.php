<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $faker=Faker::create();

/*
        \DB::table('users')->insert(array (

            'first_name' => 'maykol',
            'last_name'  => 'alvarado',
            'email'      => 'asdlfk@fdsa.com',
            'password'   => \Hash::make('secret'),
            'type'       => 'user'
        ));*/


        for($i=0; $i <50; $i++)
        {
            \DB::table('users')->insert(array (

                'first_name' => $faker->firstName,
                'last_name'  => $faker->lastName,
                'email'      => $faker->unique()->email(),
                'password'   => \Hash::make('secret'),
                'type'       => 'user'
            ));

            \DB::table('user_profiles')->insert(array (

                'user_id'    => $i+11,
                'bio'        => $faker->paragraph(rand(2,5)),
                'website'    => 'http://www.' . $faker->domainName,
                'twitter'    => 'http://www.twitter.com/' . $faker->userName,
                'birthdate'  => $faker->dateTime('-45 years', '-34 years')->format('Y-m-d')
            ));
        }


	}

}
