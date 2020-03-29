<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
    	return view('about');
    }

    public function help()
    {
    	return view('help');
    }

    public function contact()
    {
    	return view('contact');
    }


    public function how_it_works()
    {
    	return view('how_it_works');
    }
}
