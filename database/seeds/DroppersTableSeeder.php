<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'hrs_from'  => '8:45',
            'hrs_to'  => '18:45',
            'dcnic'  => '99999-9999999-9',
            'profile_image' => 'users/default.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('droppers')->insert([
            'dname'     => 'Mushtaq Ahmed',
            'email'    => 'mushtaqahmed@gmail.com',
            'password' => Hash::make('hello123'),
            'dcontact' => '+55-555-5555555',
            'hrs_from'  => '7:45',
            'hrs_to'  => '17:50',
            'dcnic'  => '55555-5555555-5',
            'profile_image' => 'users/default.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        factory(App\Dropper::class, 50)->create();
    }
}
