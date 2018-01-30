<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('creator_id');
	    $table->unsignedInteger('owner_id');
    	    $table->unsignedInteger('series_id')->nullable();
	    $table->unsignedInteger('series_order')->nullable();
	    $table->string('title_display');
	    $table->string('title_alphabetic');
    	    $table->string('subtitle')->nullable();
	    $table->string('slug');
	    $table->text('description');
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
        Schema::dropIfExists('books');
    }
}
