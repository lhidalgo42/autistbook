<?php

use Faker\Factory as Faker;

class PatientTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		Patient::create([
            'name' => $faker->name." ".$faker->lastName,
            'date' => $faker->date()
		]);

	}

}