<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('parent_id')->nullable();
	    $table->unsignedInteger('creator_id');
    	    $table->unsignedInteger('owner_id');
	    $table->unsignedInteger('type_id');
	    $table->string('name');
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
        Schema::dropIfExists('resources');
    }
}
