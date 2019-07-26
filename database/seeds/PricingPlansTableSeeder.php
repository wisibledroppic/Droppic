<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        DB::table('pricing_plans')->insert([
            'cat_name'     => 'Gold',
            'amount_per_month'    => '200 ',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }
}
