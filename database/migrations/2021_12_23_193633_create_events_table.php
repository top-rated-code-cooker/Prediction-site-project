<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer("eventId");
            $table->datetime("startTimestamp");
            $table->datetime("closeTimestamp");
            $table->datetime('endTimestamp');
            $table->string('category');
            $table->string('data');
            $table->string('oneAmount');
            $table->string('drawAmount');
            $table->string('twoAmount');
            $table->string('rewardAmount');
            $table->string('rewardBaseAmount');
            $table->integer('betCount');
            $table->integer('position'); //0:none, 1:one, 2:draw 3:two
            $table->integer("status"); //0:none, 1:open, 2:finished 3:cancelled
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
        Schema::dropIfExists('events');
    }
}
