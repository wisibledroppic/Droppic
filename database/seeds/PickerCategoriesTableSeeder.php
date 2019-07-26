<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PickerCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('picker_categories')->insert([
            'cat_name'     => 'Customer',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('picker_categories')->insert([
            'cat_name'     => 'Seller',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('picker_categories')->insert([
            'cat_name'     => 'Courier',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
