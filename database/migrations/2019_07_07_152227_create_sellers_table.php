<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('seller_id');
            $table->string('sname');
            $table->string('scontact')->unique();
            $table->string('scnic')->unique();
            $table->string('email')->unique();
            $table->integer('status_p')->references('status_id')->on('statuses')->nullable();
            $table->integer('location_p')->references('location_id')->on('locations')->nullable();
            $table->integer('pricing_plan_p')->references('pricing_plan_id')->on('pricing_plans')->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
