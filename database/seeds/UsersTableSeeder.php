<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'You',
                'email' => 'you@youremail.com',
                'avatar' => NULL,
                'password' => '$2y$10$M7Ywb.PnnaSnhAZGRaSvW.HrwRKxWpGBeCdUKiZIEiFTqM6wLuAsC',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}