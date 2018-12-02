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
            'name' => 'Dan Niculae',
            'email' => 'danniculae@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'name' => 'Ivan Germanov',
            'email' => 'ivangermanov@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'name' => 'Jaap Geurts',
            'email' => 'jaapgeurts@yopmail.com',
            'password' => bcrypt('secret'),
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
