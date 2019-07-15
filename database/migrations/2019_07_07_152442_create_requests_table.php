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
            $table->integer('picker_id')->references('picker_id')->on('pickers')->nullable();
            $table->integer('request_status_id')->references('request_status_id')->on('request_statuses')->nullable();
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
