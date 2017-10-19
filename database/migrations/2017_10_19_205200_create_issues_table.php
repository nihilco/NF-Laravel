<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('creator_id');
	    $table->unsignedInteger('owner_id');
    	    $table->unsignedInteger('type_id');
       	    $table->unsignedInteger('status_id');
       	    $table->unsignedInteger('priority_id');
	    $table->string('slug')->unique();
	    $table->string('subject');
	    $table->text('content');
	    $table->unsignedInteger('assignee_id')->nullable();
	    $table->datetime('assigned_at')->nullable();
       	    $table->unsignedInteger('resolution_id');	    
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
        Schema::dropIfExists('issues');
    }
}
