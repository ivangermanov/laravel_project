<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        // Returns view of index page
        return view('pages.index');
    }

    public function about()
    {
        // Returns view of about page
        return view('pages.about');
    }

    public function greeting($name)
    {
        // Returns view of greeting page
        // with optional parameter $name
        // which prints a greeting on screen
        return view('pages.greeting')->with('name', $name);
    }
}
