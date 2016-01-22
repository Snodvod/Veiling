<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$dt = Carbon::now();
        DB::table('auctions')->insert([
        	'title' => 'Schilderij 43P23',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis leo et accumsan maximus. Pellentesque eu ullamcorper dolor. Nulla nec lectus libero. Nunc nec euismod nibh, id vestibulum erat. Praesent venenatis volutpat dignissim. Nulla non lectus vel lorem semper eleifend id quis ex. Nulla ornare tempus vehicula. Sed purus sem, mollis eget viverra a, feugiat in enim. Nullam faucibus nunc nec leo fringilla pulvinar. Nam commodo ac ante eu aliquam. Aliquam eget nibh nec nisi tristique euismod cursus sit amet lectus. Nam blandit fermentum tortor, non semper velit vestibulum sit amet. Donec feugiat, dolor non imperdiet scelerisque, velit eros imperdiet magna, finibus pretium mi diam vitae elit. Mauris bibendum consequat diam id vehicula. Fusce enim nisi, elementum sit amet purus id, rhoncus accumsan ligula.',
        	'start' => $dt,
        	'end' => $dt->addWeek(),
            'status' => 'Active',
        	'buy_now' => 25130,
        	'price' => 10000,
        	'user_id' => 5,
        	'style_id' => 1
        ]);
        $dt->subweek();
        DB::table('auctions')->insert([
        	'title' => 'Buste Caesar',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis leo et accumsan maximus. Pellentesque eu ullamcorper dolor. Nulla nec lectus libero. Nunc nec euismod nibh, id vestibulum erat. Praesent venenatis volutpat dignissim. Nulla non lectus vel lorem semper eleifend id quis ex. Nulla ornare tempus vehicula. Sed purus sem, mollis eget viverra a, feugiat in enim. Nullam faucibus nunc nec leo fringilla pulvinar. Nam commodo ac ante eu aliquam. Aliquam eget nibh nec nisi tristique euismod cursus sit amet lectus. Nam blandit fermentum tortor, non semper velit vestibulum sit amet. Donec feugiat, dolor non imperdiet scelerisque, velit eros imperdiet magna, finibus pretium mi diam vitae elit. Mauris bibendum consequat diam id vehicula. Fusce enim nisi, elementum sit amet purus id, rhoncus accumsan ligula.',
        	'start' => $dt,
        	'end' => $dt->addWeek(),
            'status' => 'Active',
        	'buy_now' => 50000000,
        	'price' => 1,
        	'user_id' => 5,
        	'style_id' => 1
        ]);
        $dt->subweek();
        DB::table('auctions')->insert([
        	'title' => 'Picasso',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis leo et accumsan maximus. Pellentesque eu ullamcorper dolor. Nulla nec lectus libero. Nunc nec euismod nibh, id vestibulum erat. Praesent venenatis volutpat dignissim. Nulla non lectus vel lorem semper eleifend id quis ex. Nulla ornare tempus vehicula. Sed purus sem, mollis eget viverra a, feugiat in enim. Nullam faucibus nunc nec leo fringilla pulvinar. Nam commodo ac ante eu aliquam. Aliquam eget nibh nec nisi tristique euismod cursus sit amet lectus. Nam blandit fermentum tortor, non semper velit vestibulum sit amet. Donec feugiat, dolor non imperdiet scelerisque, velit eros imperdiet magna, finibus pretium mi diam vitae elit. Mauris bibendum consequat diam id vehicula. Fusce enim nisi, elementum sit amet purus id, rhoncus accumsan ligula.',
        	'start' => $dt,
        	'end' => $dt->addWeek(),
            'status' => 'Active',
        	'buy_now' => 20,
        	'price' => 0.50,
        	'user_id' => 5,
        	'style_id' => 1
        ]);
    }
}
