<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
        ]);

        DB::table('users')->insert([
            'name'     => 'Khalid User',
            'email'    => 'user10@gmail.com',
            'password' => Hash::make('hello123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
        ]);
    }

}
