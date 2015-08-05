<?php


class PatientUserTableSeeder extends Seeder {

	public function run()
	{
		PatientUser::create([
            'users_id' => 1,
            'patients_id' => 1
		]);
        PatientUser::create([
            'users_id' => 2,
            'patients_id' => 1
        ]);

	}

}