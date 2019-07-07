<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('customer_id');
            $table->string('cname');
            $table->string('ccontact')->unique();
            $table->string('ccnic')->unique();
            $table->string('email')->unique();
            $table->integer('status_id')->references('status_id')->on('statuses')->nullable();
            $table->integer('location_id')->references('location_id')->on('locations')->nullable();
            $table->integer('pricing_plan_id')->references('pricing_plan_id')->on('pricing_plans')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
