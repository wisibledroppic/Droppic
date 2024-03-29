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
            'name'     => 'Hamza Admin',
            'email'    => 'admin1@gmail.com',
            'password' => Hash::make('hello123'),
            'role_id'  => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        DB::table('users')->insert([
            'name'     => 'Khalid Admin',
            'email'    => 'admin2@gmail.com',
            'password' => Hash::make('hello123'),
            'role_id'  => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }

}
