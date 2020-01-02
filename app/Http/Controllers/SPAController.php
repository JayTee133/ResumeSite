<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContent;

class SPAController extends Controller
{
    public function index(){
    	return view('spa');
    }

    public function aboutme(){
    	$aboutMeContent = SiteContent::where('page', 'aboutme')->get();
    	return $aboutMeContent;
    }

    public function aboutsite(){
    	$aboutSiteContent = SiteContent::where('page', 'aboutsite')->get();
    	return $aboutSiteContent;
    }

    public function home(){
    	$homeContent = SiteContent::where('page', 'home')->get();
    	return $homeContent;
    }

}
