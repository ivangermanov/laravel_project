<?php

namespace App\Http\Controllers;
use App\Breed;

class PagesController extends Controller
{
    public function index()
    {
        // Returns view of index page
        $popularBreeds = Breed::orderBy('visits', 'desc')->take(3)->get();
        return view('pages.index')->with('popularBreeds', $popularBreeds);
    }

    public function about()
    {
        // Returns view of about page
        return view('pages.about');
    }

    // Example controller handling route with parameter
    // public function greeting($name)
    // {
    //     // Returns view of greeting page
    //     // with optional parameter $name
    //     // which prints a greeting on screen
    //     return view('pages.greeting')->with('name', $name);
    // }
}
