<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ArtworkTableSeeder::class);
        $this->call(ArtistTableSeeder::class);
        $this->call(StyleTableSeeder::class);
        $this->call(AuctionTableSeeder::class);
        $this->call(CountriesSeeder::class);

        Model::reguard();
    }
}
