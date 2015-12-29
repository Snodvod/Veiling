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
        	'year' => 2015,
        	'image' => 'schilderij43p23.jpg',
        	'artist_id' => 1
        ]);

        DB::table('artworks')->insert([
        	'name' => 'Buste Caesar',
        	'year' => 203,
        	'image' => 'Caesar.jpg',
        	'artist_id' => 3
        ]);
        DB::table('artworks')->insert([
        	'name' => 'Picasso',
        	'year' => 1970,
        	'image' => 'picasso.jpg',
        	'artist_id' => 2
        ]);        
    }
}
