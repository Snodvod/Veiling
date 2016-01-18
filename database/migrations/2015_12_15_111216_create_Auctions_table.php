<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuctionsTable extends Migration {

	public function up()
	{
		Schema::create('auctions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->dateTime('start');
			$table->dateTime('end');
			$table->float('buy_now');
			$table->float('price');
			$table->string('status');
			$table->integer('clicks');
			$table->integer('user_id');
			$table->integer('buyer_id');
			$table->integer('style_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('auctions');
	}
}