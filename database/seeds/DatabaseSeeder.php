<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
            'name' => 'Augusto Rende',
            'email' => 'augustorendegiacomelli@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
