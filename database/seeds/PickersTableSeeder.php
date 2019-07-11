<?php

use Illuminate\Database\Seeder;

class PickersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pickers')->insert([
            'pname'     => 'Basit Ali',
            'email'    => 'basitalikhatri@gmail.com',
            'password' => Hash::make('hello123'),
            'pcontact' => '+99-999-9999999',
            'picker_category_id'  => '1',
            'pcnic'  => '99999-9999999-9',
    
        ]);
    }
}
