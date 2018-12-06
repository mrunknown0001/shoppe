<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'firstname' => 'Admin',
        	'lastname' => 'Admin',
        	'email' => 'admin@admin.com',
        	'mobile_number' => '09156111111',
        	'password' => bcrypt('password'), 
        	'user_type' => 1
        ]);
    }
}
