<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
        	'name' => 'Kunsti kunst',
        	'nationality' => 'Belgium'
        ]);
        DB::table('artists')->insert([
        	'name' => 'Pablo Picasso',
        	'nationality' => 'Spain'
        ]);
        DB::table('artists')->insert([
        	'name' => 'Myron',
        	'nationality' => 'Greece'
        ]);
    }
}
