<?php

use Illuminate\Database\Seeder;

class RequestStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('request_statuses')->insert([
            'request_status_code'     => '0',
            'request_status_name'    => 'Requested',
            'request_status_description' => 'Any pickers has created a request',
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '1',
            'request_status_name'    => 'Cancelled',
            'request_status_description' => 'The request is cancelled  by a picker',
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '2',
            'request_status_name'    => 'Confirmed',
            'request_status_description' => 'First confirmation by a picker',
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '3',
            'request_status_name'    => 'Authorized',
            'request_status_description' => 'Final confirmation by the other picker',
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '4',
            'request_status_name'    => 'Dropped',
            'request_status_description' => "Order dropped at dropper's location",
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '5',
            'request_status_name'    => 'Collected',
            'request_status_description' => 'Order collected by Customer',
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '6',
            'request_status_name'    => 'Returnable',
            'request_status_description' => 'Customer is not receiving the order',
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '7',
            'request_status_name'    => 'Returned',
            'request_status_description' => 'Order picked by courier to return',
    
        ]);

        DB::table('request_statuses')->insert([
            'request_status_code'     => '8',
            'request_status_name'    => 'Reopened',
            'request_status_description' => 'Cancelled request is reopened',
    
        ]);
    }
}
