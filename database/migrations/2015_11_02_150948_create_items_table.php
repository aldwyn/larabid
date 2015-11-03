<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auctioneer_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->float('start_bid_amount');
            $table->timestamp('start_bid_datetime');
            $table->timestamp('end_bid_datetime');
            $table->timestamps();
            $table->foreign('auctioneer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
