<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('billing_id');
            $table->float('bil_amount');
            $table->integer('customer_p')->references('customer_id')->on('customers')->nullable();
            $table->integer('seller_p')->references('seller_id')->on('sellers')->nullable();
            $table->integer('courier_p')->references('courier_id')->on('couriers')->nullable();
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
        Schema::dropIfExists('billings');
    }
}
