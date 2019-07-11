<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickers', function (Blueprint $table) {
            $table->bigIncrements('picker_id');
            $table->string('pname');
            $table->string('pcontact')->unique();
            $table->string('pcnic')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('picker_category_id')->references('picker_category_id')->on('picker_categories')->nullable();
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
        Schema::dropIfExists('pickers');
    }
}
