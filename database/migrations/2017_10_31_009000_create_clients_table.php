<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('creator_id');
	    $table->unsignedInteger('owner_id');
	    $table->unsignedInteger('account_id');
	    $table->string('name');
	    $table->string('email');
	    $table->string('phone');
	    $table->string('address1');
	    $table->string('address2')->nullable();
	    $table->string('city');
	    $table->unsignedInteger('province_id');
	    $table->string('postal_code');
	    $table->text('description')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
