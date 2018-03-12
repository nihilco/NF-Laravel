<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('creator_id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('type_id');
            $table->string('name');
            $table->text('description');
            $table->string('stripe_id');
            $table->string('secret_key', 255);
            $table->string('publishable_key');
            $table->unsignedInteger('daily_transactions')->default(0);
            $table->integer('daily_volume')->default(0);
            $table->unsignedInteger('monthly_transactions')->default(0);
    	    $table->integer('monthly_volume')->default(0);
            $table->unsignedInteger('ytd_transactions')->default(0);
            $table->integer('ytd_volume')->default(0);
            $table->unsignedInteger('total_transactions')->default(0);
            $table->integer('total_volume')->default(0);
            $table->datetime('last_transaction_at')->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
