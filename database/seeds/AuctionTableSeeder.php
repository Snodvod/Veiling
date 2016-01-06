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
        	'description' => 'Schitterend schilderij echt fantastisch ongelooflijk',
        	'start' => $dt,
        	'end' => $dt->addWeek(),
        	'buy_now' => 25130,
        	'price' => 10000,
        	'user_id' => 5,
        	'style_id' => 1
        ]);
        DB::table('auctions')->insert([
        	'title' => 'Buste Caesar',
        	'description' => 'Caesar zonder beentjes',
        	'start' => $dt,
        	'end' => $dt->addWeek(),
        	'buy_now' => 50000000,
        	'price' => 1,
        	'user_id' => 5,
        	'style_id' => 1
        ]);
        DB::table('auctions')->insert([
        	'title' => 'Picasso',
        	'description' => 'Doek vol vlekken, Picasso had gezopen',
        	'start' => $dt,
        	'end' => $dt->addWeek(),
        	'buy_now' => 20,
        	'price' => 0.50,
        	'user_id' => 5,
        	'style_id' => 1
        ]);
    }
}
