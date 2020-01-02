<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiteContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0; $i<8; ++$i){
	        DB::table('site_contents')->insert([
	        	'name' => Str::random(10),
	        	'page' => 'aboutme',
	        	'content' => Str::random(50),
	        ]);
	    }

	    for($i=0; $i<8; ++$i){
	        DB::table('site_contents')->insert([
	        	'name' => Str::random(10),
	        	'page' => 'aboutsite',
	        	'content' => Str::random(50),
	        ]);
	    }

	    for($i=0; $i<2; ++$i){
	        DB::table('site_contents')->insert([
	        	'name' => Str::random(10),
	        	'page' => 'home',
	        	'content' => Str::random(50),
	        ]);
	    }
    }
}
