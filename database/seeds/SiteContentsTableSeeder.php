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
    
	    DB::table('site_contents')->insert([
        	'name' => 'welcome',
        	'page' => 'home',
        	'content' => "Hi there! Welcome to my little resume site. <br> <br> Here you'll find more info about me, information about this site and a more pleasurable reading experience than a plain old resume. If you're curious about the code, click on the title at top to be linked to my Github. Thanks for stopping by!",
        ]);

        DB::table('site_contents')->insert([
        	'name' => 'A little bit about me..',
        	'page' => 'aboutme',
        	'content' => "Just in case you forgot, my name is Jack and I am a fourth year computer science student at Carleton University. I enjoy all things related to computer science and I'm currently in the computer and internet security stream. When I'm not at school I'm usually trying to become a better cook or hanging out with my friends. If I'm watching TV its usually the Office or recently I watched the Witcher. If I'm watching a movie I'm probably rewatching Blade Runner 2049.",
        ]);

        DB::table('site_contents')->insert([
        	'name' => 'Education',
        	'page' => 'aboutme',
        	'content' => "I was originally admitted to Carleton for electrical engineering in the fall of 2016. After completing my first year I decided to make the switch to computer science as I had thoroughly enjoyed my first year programming course and wanted to continue taking programming courses. Since then I've been very happy with my choice and continue to look forward to my courses. Some of my favourites have been Applied Cryptography and Algorithms for Modern Data Sets.",
        ]);

        DB::table('site_contents')->insert([
        	'name' => 'Employement',
        	'page' => 'aboutme',
        	'content' => "For the first three years of my undergrad I worked at the Student Experience Office. The SEO is responsible for a wide variety of student development programs. This includes orientation programs, a leadership conference, mentorship programs and much more. <br> I held a variety of positions ranging from administrative work to leading orientation sessions and then handling some of the financial components of the office. I owe much of my personal and professional growth over the past few years to the individuals who mentored me during my time at the SEO. I learned valuable communcation and teamworking skills and will be forever grateful to the staff for their patience, kindness and guidance. <br> <br> I left the SEO for my first co-op position in May 2019 at the Office of Strategic Initiatives at Carleton University. I was part of the web development team at OSI. The work was primarily supporting other offices at Carleton by creating internal sites to replace their paper-based processes. In addition to gaining more web dev experience, I was introduced to many new things like staging environments, coordinating between developers and the challenges of operating within a large institution. <br> This academic year I decided to try something new and became a teaching assistant. In the fall I TA'd COMP3004 - Object Oriented Software Engineering and I am currently a TA for COMP2404 - Intro to Object Oriented Software Engineering. Some of my responsibilites have included marking assignments, holding office hours and proctoring midterms. So far it has been a very rewarding experience.",
        ]);

		DB::table('site_contents')->insert([
 			'name' => 'Whats behind this site?',
        	'page' => 'aboutsite',
        	'content' => "This website was my first journey into single page applications. At my placement this past summer we used Laravel and php for the server side software and the front-end was handled primarily through jQuery. We had explored a few possibilites for integrating a more modern front-end framework but unfortunately my time with had ended before I had the chance to see it through. This lead to my choice of Vue because I wanted to learn more about what a modern framework looks like and why single page applications are becoming more common. The Laravel back-end is an api for my Vue app to consume and I use the VueRouter for site navigation. <br> I am currently hosting this on a DigitalOcean droplet with a LEMP stack on a Ubuntu VM.",
 		]);


        DB::table('site_contents')->insert([
        	'name' => 'Challenges',
        	'page' => 'aboutsite',
        	'content' => "Admittedly, graphic design is not my strong suit. Neither is choosing good colour palette. The majority of time I spent putting this site together was learning to use css. I had done a little bit of css at my co-op placement last summer using the bootstrap framework but had never started from scratch. I chose tailwindcss because it does its best to not be opinionated and provide lots of configuration options. While I don't know enough to leverage all of the configuration options, the base settings have been a joy to work with. <br> The background with the circles was my attempt at making a trendy ultracool minimalist website graphic. I used Inkscape which is an open source alternative to Adobe Illustrator. <br> I'd also recommend viewing this site with latest version of Chrome as I did my best to eliminate cross browser inconsistencies but its always possible I missed something.",
        ]);

        DB::table('site_contents')->insert([
        	'name' => 'Moving Forward',
        	'page' => 'aboutsite',
        	'content' => "I'd like the site to look a little nicer. I need to put more time into learning design concepts and related tools. I also need to put in an admin panel to make editing site content easier but at the moment I'm not sure how to do this securely using Vue. I also want to explore other server side frameworks and will maybe swap out Laravel for Django or Ruby on Rails to get a feel for other back-end frameworks.",
        ]);

    }
}
