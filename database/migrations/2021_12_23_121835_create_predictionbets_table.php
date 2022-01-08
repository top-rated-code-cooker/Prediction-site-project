<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredictionbetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predictionbets', function (Blueprint $table) {
            $table->id();
            $table->string("address");
            $table->integer("epochId");
            $table->integer("predictionType"); //0:btc, 1:eth, 2:bnb
            $table->integer("position"); //0:Bull, 1:Bear
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
        Schema::dropIfExists('predictionbets');
    }
}
