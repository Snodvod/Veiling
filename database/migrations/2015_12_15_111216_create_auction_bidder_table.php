<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuctionBidderTable extends Migration {

	public function up()
	{
		Schema::create('auction_bidder', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('auction_id')->unsigned();
			$table->integer('bidder_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('auction_bidder');
	}
}