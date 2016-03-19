<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
				'nombre' 	=> 'Yasser',
				'telefono'	=> '+59891336302',
                'email'     => 'yasser.mussa@gmail.com',
				'password' 	=> bcrypt('123456789')
        	]);
    }
}
