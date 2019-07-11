<?php

use Illuminate\Database\Seeder;

class DroppersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('droppers')->insert([
            'dname'     => 'Basit Ali',
            'email'    => 'basitalikhatri98@gmail.com',
            'password' => Hash::make('hello123'),
            'dcontact' => '+99-999-9999999',
            'davail_hrs'  => '8 AM to 8 PM',
            'dcnic'  => '99999-9999999-9',
    
        ]);
        DB::table('droppers')->insert([
            'dname'     => 'Mushtaq Ahmed',
            'email'    => 'mushtaqahmed@gmail.com',
            'password' => Hash::make('hello123'),
            'dcontact' => '+55-555-5555555',
            'davail_hrs'  => '8 AM to 8 PM',
            'dcnic'  => '55555-5555555-5',
    
        ]);
    }
}
