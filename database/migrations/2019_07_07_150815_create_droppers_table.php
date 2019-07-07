<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDroppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droppers', function (Blueprint $table) {
            $table->bigIncrements('dropper_id');
            $table->string('dname');
            $table->string('dcontact')->unique();
            $table->string('davail_hrs');
            $table->integer('status_id')->references('status_id')->on('statuses')->nullable();
            $table->integer('location_id')->references('location_id')->on('locations')->nullable();
            // $table->integer('status_p');
            // $table->foreign('status_p')->references('status_id')->on('status');
            // $table->integer('location_p');
            // $table->foreign('location_p')->references('location_id')->on('location');
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
        Schema::dropIfExists('droppers');
    }
}
