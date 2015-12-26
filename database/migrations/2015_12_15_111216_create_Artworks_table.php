<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtworksTable extends Migration {

	public function up()
	{
		Schema::create('artworks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->date('year');
			$table->string('image');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('auction_id');
		});
	}

	public function down()
	{
		Schema::drop('artworks');
	}
}