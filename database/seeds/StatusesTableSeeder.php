<?php

use Illuminate\Database\Seeder;

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
            'status_code'     => '0',
            'status_name'    => 'Signed up',
            'status_description' => 'Signed up',
    
        ]);

        DB::table('statuses')->insert([
            'status_code'     => '1',
            'status_name'    => 'Pricing Added',
            'status_description' => 'admin has set pricing',
    
        ]);
        
        DB::table('statuses')->insert([
            'status_code'     => '2',
            'status_name'    => 'Active',
            'status_description' => 'activated by admin or customer added (pickers) or location of dropper is added',
    
        ]);

        DB::table('statuses')->insert([
            'status_code'     => '3',
            'status_name'    => 'Inactive',
            'status_description' => 'manually deactivated by admin',
    
        ]);

        DB::table('statuses')->insert([
            'status_code'     => '4',
            'status_name'    => 'Billing Generated',
            'status_description' => 'Billing is generated for the picker',
    
        ]);

        DB::table('statuses')->insert([
            'status_code'     => '5',
            'status_name'    => 'Payment Due',
            'status_description' => 'When due date of billing exceeds',
    
        ]);

        DB::table('statuses')->insert([
            'status_code'     => '6',
            'status_name'    => 'Payment Received',
            'status_description' => 'Amount of Request or Amount of Billing received',
    
        ]);

        DB::table('statuses')->insert([
            'status_code'     => '7',
            'status_name'    => 'Payment Transferred',
            'status_description' => 'Amount of Request transferred to courier',
    
        ]);
    }
}
