<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('request_id');
            $table->string('rname');
            $table->string('rcontact');
            $table->string('rcnic');
            $table->string('email');
            $table->string('order_desc');
            $table->float('req_amount');
            $table->integer('customer_id')->references('customer_id')->on('customers')->nullable();
            $table->integer('seller_id')->references('seller_id')->on('sellers')->nullable();
            $table->integer('courier_id')->references('courier_id')->on('couriers')->nullable();
            $table->integer('status_id')->references('status_id')->on('statuses')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
