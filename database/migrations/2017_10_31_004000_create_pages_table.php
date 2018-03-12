<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('creator_id');
    	    $table->unsignedInteger('owner_id');
            $table->unsignedInteger('website_id');
            $table->string('title');
            $table->string('slug');
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
        Schema::dropIfExists('pages');
    }
}
