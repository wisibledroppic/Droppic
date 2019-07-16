<?php

use Illuminate\Database\Seeder;

class PricingPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricing_plans')->insert([
            'cat_name'     => 'Silver',
            'amount_per_month'    => '50 ',
    
        ]);

        DB::table('pricing_plans')->insert([
            'cat_name'     => 'Gold',
            'amount_per_month'    => '200 ',
    
        ]);
    }
}
