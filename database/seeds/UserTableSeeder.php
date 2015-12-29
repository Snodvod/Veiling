<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => "Piet Piet",
        	'email' => "Piet@piet.be",
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
        	'name' => "Kunst Piet",
        	'email' => "Kunst@piet.be",
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
        	'name' => "Zwarte Piet",
        	'email' => "Zwarte@piet.be",
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
        	'name' => "Sinter Klaas",
        	'email' => "Sinter@Klaas.be",
        	'password' => bcrypt('password')
        ]);
    }
}
