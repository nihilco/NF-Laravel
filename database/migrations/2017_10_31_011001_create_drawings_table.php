<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrawingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drawings', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('creator_id');
	    $table->unsignedInteger('owner_id');
	    $table->unsignedInteger('lottery_id');
	    $table->unsignedInteger('jackpot');
	    $table->unsignedInteger('ball_one');
	    $table->unsignedInteger('ball_two');
	    $table->unsignedInteger('ball_three');
	    $table->unsignedInteger('ball_four');
	    $table->unsignedInteger('ball_five');
	    $table->unsignedInteger('ball_bonus');
	    $table->date('drawing_at');
	    $table->softDeletes();
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
        Schema::dropIfExists('drawings');
    }
}
