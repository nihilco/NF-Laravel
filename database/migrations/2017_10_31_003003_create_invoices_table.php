<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('creator_id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('status_id');
            $table->string('slug');
            $table->unsignedInteger('total_items');
            $table->float('tax_rate');
            $table->integer('tax');
            $table->integer('shipping');
            $table->integer('total');
            $table->datetime('due_at');
            $table->datetime('opened_at')->nullable();
            $table->datetime('paid_at')->nullable();
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
        Schema::dropIfExists('invoices');
    }
}
