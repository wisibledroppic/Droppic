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
            $table->integer('picker_id')->references('picker_id')->on('pickers')->nullable();
            $table->integer('dropper_id')->references('dropper_id')->on('droppers')->nullable();
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
