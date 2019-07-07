<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->bigIncrements('courier_id');
            $table->string('cname');
            $table->string('ccontact')->unique();
            $table->string('ccnic')->unique();
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
        Schema::dropIfExists('couriers');
    }
}