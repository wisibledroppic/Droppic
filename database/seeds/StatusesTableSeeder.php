<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status_name'    => 'Signed up',
            'status_description' => 'Signed up',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        DB::table('statuses')->insert([
            'status_name'    => 'Pricing Added',
            'status_description' => 'admin has set pricing',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

        DB::table('statuses')->insert([
            'status_name'    => 'Active',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'status_description' => 'activated by admin or customer added (pickers) or location of dropper is added',

        ]);

        DB::table('statuses')->insert([
            'status_name'    => 'Inactive',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'status_description' => 'manually deactivated by admin',

        ]);

        DB::table('statuses')->insert([
            'status_name'    => 'Billing Generated',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'status_description' => 'Billing is generated for the picker',

        ]);

        DB::table('statuses')->insert([
            'status_name'    => 'Payment Due',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'status_description' => 'When due date of billing exceeds',

        ]);

        DB::table('statuses')->insert([
            'status_name'    => 'Payment Received',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'status_description' => 'Amount of Request or Amount of Billing received',

        ]);

        DB::table('statuses')->insert([
            'status_name'    => 'Payment Transferred',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'status_description' => 'Amount of Request transferred to courier',

        ]);
    }
}
