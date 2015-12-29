<?php

use Illuminate\Database\Seeder;

class StyleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('styles')->insert([
        	'name' => 'Abstract'
        ]);
        DB::table('styles')->insert([
        	'name' => 'African American'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Asian Contemporary'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Conceptual'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Emerging Artists'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Figurative'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Middle Eastern Contemporary'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Minimalism'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Modern'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Pop'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Urban'
        ]);
        DB::table('styles')->insert([
        	'name' => 'Vintage Photography'
        ]);
    }
}
