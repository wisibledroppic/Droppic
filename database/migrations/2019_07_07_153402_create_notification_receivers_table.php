<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationReceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_receivers', function (Blueprint $table) {
            $table->bigIncrements('not_rec_id');
            $table->integer('customer_p')->references('customer_id')->on('customers')->nullable();
            $table->integer('seller_p')->references('seller_id')->on('sellers')->nullable();
            $table->integer('courier_p')->references('courier_id')->on('couriers')->nullable();
            $table->integer('dropper_p')->references('dropper_id')->on('droppers')->nullable();
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
        Schema::dropIfExists('notification_receivers');
    }
}
