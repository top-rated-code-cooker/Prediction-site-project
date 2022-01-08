<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventbetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventbets', function (Blueprint $table) {
            $table->id();
            $table->string("address");
            $table->integer("eventId");
            $table->integer("position"); //0:none, 1:one, 2:draw 3:two
            $table->string("amount");
            $table->boolean("claimed");
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
        Schema::dropIfExists('eventbets');
    }
}
