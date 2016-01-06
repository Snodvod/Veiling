<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
                $table->string('name');
                $table->string('email');
                $table->string('country');
                $table->integer('zip');
                $table->string('city');
                $table->string('address');
                $table->string('phone');
                $table->string('avatar');
                $table->string('facebook_id')->unique()->nullable();
                $table->string('password', 60);
                $table->integer('bidder_id');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
