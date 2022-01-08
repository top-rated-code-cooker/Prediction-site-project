<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->id();
            $table->integer("predictionType"); //0:btc, 1:eth, 2:bnb
            $table->integer("epoch");
            $table->string('bullAmount');
            $table->string('bearAmount');
            $table->string('rewardBaseCalAmount');
            $table->string('rewardAmount');
            $table->string('lockPrice');
            $table->string('closePrice');
            $table->datetime('startTimestamp');
            $table->datetime('lockTimestamp');
            $table->datetime('closeTimestamp');
            $table->datetime('lockPriceTimestamp');
            $table->datetime('closePriceTimestamp');
            $table->boolean("closed");
            $table->boolean("cancelled");
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
        Schema::dropIfExists('rounds');
    }
}
