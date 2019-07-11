<?php

use Illuminate\Database\Seeder;

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
        ]);

        DB::table('picker_categories')->insert([
            'cat_name'     => 'Seller',
        ]);

        DB::table('picker_categories')->insert([
            'cat_name'     => 'Courier',
        ]);
    }
}
