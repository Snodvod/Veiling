<?php

use Illuminate\Database\Seeder;

class ArtworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artworks')->insert([
        	'name' => 'Schilderij 43P23',
            'condition' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis leo et accumsan maximus. Pellentesque eu ullamcorper dolor. Nulla nec lectus libero. Nunc nec euismod nibh, id vestibulum erat. Praesent venenatis volutpat dignissim. Nulla non lectus vel lorem semper eleifend id quis ex. Nulla ornare tempus vehicula. Sed purus sem, mollis eget viverra a, feugiat in enim. Nullam faucibus nunc nec leo fringilla pulvinar. Nam commodo ac ante eu aliquam. Aliquam eget nibh nec nisi tristique euismod cursus sit amet lectus. Nam blandit fermentum tortor, non semper velit vestibulum sit amet. Donec feugiat, dolor non imperdiet scelerisque, velit eros imperdiet magna, finibus pretium mi diam vitae elit. Mauris bibendum consequat diam id vehicula. Fusce enim nisi, elementum sit amet purus id, rhoncus accumsan ligula.',
        	'year' => 2015,
        	'image' => 'kunst.jpg',
            'auction_id' => 1,
        	'artist_id' => 1
        ]);

        DB::table('artworks')->insert([
        	'name' => 'Buste Caesar',
            'condition' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis leo et accumsan maximus. Pellentesque eu ullamcorper dolor. Nulla nec lectus libero. Nunc nec euismod nibh, id vestibulum erat. Praesent venenatis volutpat dignissim. Nulla non lectus vel lorem semper eleifend id quis ex. Nulla ornare tempus vehicula. Sed purus sem, mollis eget viverra a, feugiat in enim. Nullam faucibus nunc nec leo fringilla pulvinar. Nam commodo ac ante eu aliquam. Aliquam eget nibh nec nisi tristique euismod cursus sit amet lectus. Nam blandit fermentum tortor, non semper velit vestibulum sit amet. Donec feugiat, dolor non imperdiet scelerisque, velit eros imperdiet magna, finibus pretium mi diam vitae elit. Mauris bibendum consequat diam id vehicula. Fusce enim nisi, elementum sit amet purus id, rhoncus accumsan ligula.',
        	'year' => 203,
        	'image' => 'kunst.jpg',
            'auction_id' => 2,
        	'artist_id' => 3
        ]);
        DB::table('artworks')->insert([
        	'name' => 'Picasso',
            'condition' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus convallis leo et accumsan maximus. Pellentesque eu ullamcorper dolor. Nulla nec lectus libero. Nunc nec euismod nibh, id vestibulum erat. Praesent venenatis volutpat dignissim. Nulla non lectus vel lorem semper eleifend id quis ex. Nulla ornare tempus vehicula. Sed purus sem, mollis eget viverra a, feugiat in enim. Nullam faucibus nunc nec leo fringilla pulvinar. Nam commodo ac ante eu aliquam. Aliquam eget nibh nec nisi tristique euismod cursus sit amet lectus. Nam blandit fermentum tortor, non semper velit vestibulum sit amet. Donec feugiat, dolor non imperdiet scelerisque, velit eros imperdiet magna, finibus pretium mi diam vitae elit. Mauris bibendum consequat diam id vehicula. Fusce enim nisi, elementum sit amet purus id, rhoncus accumsan ligula.',
        	'year' => 1970,
        	'image' => 'kunst.jpg',
            'auction_id' => 3,
        	'artist_id' => 2
        ]);        
    }
}
