<?php

namespace App\Http\Controllers;
use App\Breed;

class PagesController extends Controller
{
    public function index()
    {
        // Returns view of index page
<<<<<<< HEAD
        $popularBreeds = Breed::orderBy('visits')->take(3)->get();
        $recentBreeds = Breed::orderBy('created_at')->take(6)->get();
        return view('pages.index')
            ->with('popularBreeds', $popularBreeds)
            ->with('recentBreeds', $recentBreeds);
=======
        $popularBreeds = Breed::orderBy('visits', 'desc')->take(3)->get();
        return view('pages.index')->with('popularBreeds', $popularBreeds);
>>>>>>> 7a0233c56c3dfca46aa3bcab499a707bd3102de4
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
