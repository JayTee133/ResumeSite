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
    	// for($i=0; $i<8; ++$i){
	    //     DB::table('site_contents')->insert([
	    //     	'name' => Str::random(10),
	    //     	'page' => 'aboutme',
	    //     	'content' => Str::random(50),
	    //     ]);
	    // }

	    // for($i=0; $i<8; ++$i){
	    //     DB::table('site_contents')->insert([
	    //     	'name' => Str::random(10),
	    //     	'page' => 'aboutsite',
	    //     	'content' => Str::random(50),
	    //     ]);
	    // }
    
	    DB::table('site_contents')->insert([
        	'name' => 'welcome',
        	'page' => 'home',
        	'content' => "Hi there! Welcome to my little resume site. <br> <br> Here you'll find more info about me, information about this site and a more pleasurable reading experience than a plain old resume. This site is a single page application built with Vue and Laravel (linked below in the footer).",
        ]);

        DB::table('site_contents')->insert([
        	'name' => 'A little bit about me..',
        	'page' => 'aboutme',
        	'content' => "Just in case you forgot, my name is Jack and I am a fourth year computer science student at Carleton University. I enjoy almost all things related to computer science and I'm currently in the computer and internet security stream. When I'm not at school I'm usually trying to become a better cook or hanging out with my friends.",
        ]);

        DB::table('site_contents')->insert([
        	'name' => 'Education',
        	'page' => 'aboutme',
        	'content' => "I was originally admitted to Carleton for electrical engineering in fall of 2016. After completing my first year I decided to make the switch to computer science as I had thoroughly enjoyed my first year programming course and wanted to continue taking programming courses. ",
        ]);

        DB::table('site_contents')->insert([
        	'name' => 'Employement',
        	'page' => 'aboutme',
        	'content' => "For the first three years of my undergrad I worked at the Student Experience Office. The SEO is responsible for a wide variety of student development programs. This includes orientation programs, a leadership conference, mentorship programs and much more. <br> I held a variety of positions ranging from administrative work to leading orientation sessions and then handling some of the financial components of the office. I owe much of my personal and professional growth over the past few years to the individuals who mentored me during my time at the SEO. I learned valuable communcation and teamworking skills and will be forever grateful to the staff for their patience, kindness and guidance. <br> <br> I left the SEO for my first co-op position in May 2019 at the Office of Strategic Initiatives at Carleton University. OSI was responsible for a number of things and I was part of the web development team. The work was primarily supporting other offices at Carleton by creating internal sites to replace their paper-based processes.",
        ]);

		DB::table('site_contents')->insert([
 			'name' => 'Whats behind this site?',
        	'page' => 'aboutsite',
        	'content' => "This website was my first journey into single page applications. At my placement this past summer Laravel and php was the server side software and the front-end was handled primarily through jQuery. We had explored a few possibilites for integrating a more modern front-end framework but unfortunately my time with OSI ended. This lead to my choice of Vue because I wanted to learn more about what a modern framwork looks like and why single page applications are becoming more common. The Laravel back-end is just an api for my Vue app to consume and doesn't do too much else. <br> I am currently hosting this on a DigitalOcean droplet. ",
 		]);


        DB::table('site_contents')->insert([
        	'name' => 'Challenges',
        	'page' => 'aboutsite',
        	'content' => "Admittedly, graphic design is not my strong suit. The majority of time I spent putting this site together was learning to use css. I had done a little bit of css at my co-op placement last summer using the bootstrap framework but had never started from scratch. I chose tailwindcss because it does its best to not be opinionated and provide lots of configuration options. While I don't know enough to leverage all of the configuration options the base settings have been a joy to work with.",
        ]);



    }
}
