<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->increments('id');
	    $table->unsignedInteger('creator_id');
	    $table->unsignedInteger('owner_id');
	    $table->unsignedInteger('invoice_id');
	    $table->string('name');
	    $table->unsignedInteger('unit_id');
	    $table->unsignedInteger('quantity');
	    $table->integer('unit_price');
	    $table->integer('subtotal');
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
        Schema::dropIfExists('invoice_items');
    }
}
