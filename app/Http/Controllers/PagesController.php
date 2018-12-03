<?php

namespace App\Http\Controllers;
use App\Breed;

class PagesController extends Controller
{
    public function index()
    {
        // Returns view of index page
        $popularBreeds = Breed::orderBy('visits', 'desc ')->take(3)->get();
        $recentBreeds = Breed::orderBy('created_at', 'desc')->take(6)->get();
        return view('pages.index')
            ->with('popularBreeds', $popularBreeds)
            ->with('recentBreeds', $recentBreeds);
    }

    public function about()
    {
        // Returns view of about page
        return view('pages.about');
    }

    public function profile()
    {
        //returns view of the profile page if the user is logged in, and login screen if not
        return view('profile.index');
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
