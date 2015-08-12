<?php


class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
            'name' => 'Leonardo Hidalgo',
            'date' => '1993-09-09',
            'email' => 'lhidalgo@alumnos.uai.cl',
            'password' => '1234'
		]);
        User::create([
            'name' => 'Enzo Scilla',
            'date' => '1991-01-14',
            'email' => 'enzo.9214@gmail.com',
            'password' => '1234'
        ]);
        User::create([
            'name' => 'Francisca Morales',
            'date' => '1991-01-14',
            'email' => 'morales.fransu@gmail.com',
            'password' => '1234'
        ]);
	}


}