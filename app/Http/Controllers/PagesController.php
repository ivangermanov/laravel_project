<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Http\Controllers\BreedsController;
=======
use App\Breed;
>>>>>>> e721dfffa9a00604b0cb2dcd92308207ddfc3fea

class PagesController extends Controller
{
    public function index()
    {
        // Returns view of index page
        $popularBreeds = Breed::orderBy('visits')->take(3)->get();
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
