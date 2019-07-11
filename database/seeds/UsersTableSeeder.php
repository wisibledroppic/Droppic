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
            'name'     => 'Hamza User',
            'email'    => 'user@gmail.com',
            'password' => Hash::make('hello123'),
    
        ]);

        DB::table('users')->insert([
            'name'     => 'Khalid User',
            'email'    => 'user10@gmail.com',
            'password' => Hash::make('hello123'),
    
        ]);
    }

}
