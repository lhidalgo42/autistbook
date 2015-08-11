<?php


class SensorTableSeeder extends Seeder {

	public function run()
	{
		Sensor::create([
            'code' => 1438791775,
            'name' => 'Sensor Cardiaco',
			'patients_id' => 1
		]);

	}

}