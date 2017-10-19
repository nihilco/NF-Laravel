<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('creator_id');
    	    $table->unsignedInteger('owner_id');
	    $table->string('title');
	    $table->string('slug')->unique();
	    $table->text('description');
    	    $table->text('content');
    	    $table->unsignedInteger('views_count')->default(0);
	    $table->datetime('last_viewed_at')->nullable();
	    $table->datetime('published_at');
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
        Schema::dropIfExists('posts');
    }
}
