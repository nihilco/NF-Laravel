<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrioritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priorities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('creator_id');
            $table->unsignedInteger('owner_id');
            $table->string('model');
            $table->string('name', 100);
            $table->string('slug', 100)->unique();
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
        Schema::dropIfExists('priorities');
    }
}
