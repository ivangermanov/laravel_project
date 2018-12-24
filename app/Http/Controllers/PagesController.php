<?php

namespace App\Http\Controllers;

use App\Breed;
use App\Exports\UsersExport;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
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
        if (Auth::check()) {
            if (Auth::user()->isAdmin()) {
                $sbreeds = DB::table('breeds')->where('reviewed', 0)->get();
                $susers = DB::table('users')->get();
                $breeds = DB::table('breeds')
                    ->select()
                    ->where('reviewed', 0)
                    ->orderBy(DB::raw('ifnull(updated_at, created_at)'))
                    ->paginate(10, ['*'], 'breed');

                $users = User::orderBy('created_at', 'desc')->paginate(10, ['*'], 'user');
                $sum = 0;
                for ($i = 0; $i < count($sbreeds); $i++) {
                    $sum = $sum + $sbreeds[$i]->visits;
                }
                $avgVisits = $sum / count($sbreeds);
                $avgPosts = count($sbreeds) / count($susers);
                return view('pages.controlPanel')
                    ->with('breeds', $breeds)
                    ->with('users', $users)
                    ->with('avgVisits', $avgVisits)
                    ->with('avgPosts', $avgPosts)
                    ->with('totalBreeds', count($sbreeds))
                    ->with('totalUsers', count($susers));
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }
    
    public function export_xlsx()
    {
        if (Auth::user()->isAdmin()) {
            return Excel::download(new UsersExport, 'users.xlsx');
        }
    }
}
