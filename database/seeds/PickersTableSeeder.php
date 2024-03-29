<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'pname'     => 'Mehmood hasan',
            'email'    => 'Picker@gmail.com',
            'password' => Hash::make('hello123'),
            'pcontact' => '2999-9999999',
            'picker_category_id'  => '1',
            'pcnic'  => '99999-9999999-9',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'profile_image' => 'users/default.png',
            'pricing_plan_id' => '1',


        ]);

        DB::table('pickers')->insert([
            'pname'     => 'Muhammad Yousuf',
            'email'    => 'yousuf@gmail.com',
            'password' => Hash::make('hello123'),
            'pcontact' => '8999-9999999',
            'picker_category_id'  => '2',
            'pcnic'  => '99999-9999999-7',
            'pricing_plan_id' => '1',
            'profile_image' => 'users/default.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        factory(App\Picker::class, 50)->create();
    }
}
