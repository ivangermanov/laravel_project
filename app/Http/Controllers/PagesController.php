<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Breed;
use App\User;

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

    public function controlPanel()
    { 
        if (Auth::check())
        {
            if (Auth::user()->isAdmin())
            {
                $breeds = DB::table('breeds')
                ->select()
                ->where('reviewed', 0)
                ->orderBy(DB::raw('ifnull(updated_at, created_at)'))
                ->paginate(10);
                
                $users = User::orderBy('created_at', 'desc')->paginate(10);
                $sum = 0;
                for ($i=0; $i < count($breeds); $i++) 
                { 
                    $sum = $sum + $breeds[$i]->visits;
                }
                $avgVisits = $sum / count($breeds);
                $avgPosts = count($breeds)/count($users);
                return view('pages.controlPanel')
                    ->with('breeds', $breeds)
                    ->with('users', $users)
                    ->with('avgVisits', $avgVisits)
                    ->with('avgPosts', $avgPosts)
                    ->with('totalBreeds', count($breeds))
                    ->with('totalUsers', count($users));
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/');
        }
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
