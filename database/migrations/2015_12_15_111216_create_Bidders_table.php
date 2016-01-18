<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBiddersTable extends Migration {

	public function up()
	{
		Schema::create('bidders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('price');
			$table->integer('auction_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('bidders');
	}
}