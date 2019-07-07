<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->float('payment_amount');
            $table->integer('request_p')->references('request_id')->on('requests')->nullable();
            $table->integer('status_p')->references('status_id')->on('statuses')->nullable();
            $table->integer('promotion_p')->references('promotion_id')->on('promotions')->nullable();
            $table->integer('bank_p')->references('bank_id')->on('banks')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
