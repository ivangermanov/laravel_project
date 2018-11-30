<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        // // Testing DATABASE HERE:
        // // Raw SQL Query
        //$dog = DB::connection('mysqlLocal')->select('select * from breeds where id = ?', [1]);
        //print_r($dog);
        //print_r($dog[0]->breed);

        // // Using named bindings
        //$dog = DB::connection('mysqlLocal')->select('select * from breeds where id = :id', ['id' => 1]);
        //print_r($dog[0]->breed);

        // // Using inserts, deletes, updates - they work the same way
        // DB::connection('mysqlLocal')->insert('insert into breeds (id, breed, height, weight, history, behaviour) values (?, ?, ?, ?, ?, ?)', [2, 'Doberman', 0.5, 35, 'IDK', 'Aggresive.']);

        // // General SQL statement
        // DB:statement('drop table breeds');

        // Returns view of index page
        return view('pages.index');
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
