<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Breed;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BreedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breeds = Breed::orderBy('breed')->paginate(9);
        return view('breeds.index')->with('breeds', $breeds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('breeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'breed' => 'required',
            'image' => 'required|image',
            'history' => 'required',
            'height' => 'required',
            'weight' => 'required',
        ]);

        // Create Breed
        $breed = new Breed;
        $breed->breed = $request->input('breed');
        $breed->height = $request->input('height');
        $breed->weight = $request->input('weight');
        $breed->history = $request->input('history');

        // Formatting the traits for the DB
        $traits = [];
        for ($i = 0; $i < 6; $i++) {
            if ($request->filled('trait' . ($i + 1))) {
                array_push($traits, $request->input('trait' . ($i + 1)));
            }
        }
        $traits_str = implode(", ", $traits);
        $breed->traits = strip_tags($traits_str);

        // Handling the image
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $file = $request->image->store('public/images/breeds');
                $path = basename($file);
                $breed->img_link = Storage::url('public/images/breeds/' . $path);
            }
        }

        $breed->author = Auth::user()->name;
        $breed->save();
        return redirect('/breeds')->with('success', 'Breed Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $breed = Breed::find($id);
        $traits = explode(", ", $breed['traits']);
        $breed->visits = $breed->visits + 1;
        $breed->save();
        return view('breeds.show')->with('breed', $breed)->with('traits', $traits);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breed = Breed::find($id);
        if ($breed->author === Auth::id()) {
            $traits = explode(", ", $breed->traits);
            return view('breeds.edit')->with('breed', $breed)->with('traits', $traits);
        } else {
            return redirect('/breeds')->with('error', 'You are not the author of this breed!');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($breed->author === Auth::id()) {
            $this->validate($request, [
                'breed' => 'required',
                'image' => 'nullable|image',
                'history' => 'required',
                'height' => 'required',
                'weight' => 'required',
            ]);
    
            // Update Breed
            $breed = Breed::find($id);
            $breed->breed = $request->input('breed');
            $breed->height = $request->input('height');
            $breed->weight = $request->input('weight');
            $breed->history = $request->input('history');
    
            // Formatting the traits for the DB
            $traits = [];
            for ($i = 0; $i < 6; $i++) {
                if ($request->filled('trait' . ($i + 1))) {
                    array_push($traits, $request->input('trait' . ($i + 1)));
                }
            }
            $traits_str = implode(", ", $traits);
            $breed->traits = strip_tags($traits_str);
    
            // Handling the image
            if ($request->hasFile('image')) {
                if ($request->file('image')->isValid()) {
                    $file = $request->image->store('public/images/breeds');
                    $path = basename($file);
                    $breed->img_link = Storage::url('public/images/breeds/' . $path);
                }
            }
    
            $breed->author = Auth::user()->id;
            $breed->save();
            return redirect('/breeds')->with('success', 'Breed Updated');
        } else {
            return redirect('/breeds')->with('error', 'You are not the author of this breed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $breed = Breed::find($id);
        if ($breed->author === Auth::id()) {
            $breed->delete();
            return redirect('/breeds')->with('success', 'Breed Removed');
        } else {
            return redirect('/breeds')->with('error', 'You are not the author of this breed!');
        }
    }
}
