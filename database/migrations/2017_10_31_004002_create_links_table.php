<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('creator_id');
	    $table->unsignedInteger('owner_id');
	    $table->string('slug');
	    $table->string('name');
	    $table->string('url');
	    $table->boolean('blank')->default(true);
	    $table->unsignedInteger('clicks')->default(0);
	    $table->datetime('last_click_on')->nullable();
	    $table->datetime('expires_at')->nullable();
	    $table->unsignedInteger('uses')->nullable();
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
        Schema::dropIfExists('links');
    }
}
