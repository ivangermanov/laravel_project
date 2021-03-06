<?php

namespace App\Http\Controllers;

use App\User;
use App\Breed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;
use PDF;

class BreedsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $breeds = Breed::with('user')->orderBy('breed')->paginate(9);
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
            'image' => 'required|image|max:1999',
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
                // Get filename with extension
                $filenamewithextension = $request->file('image')->getClientOriginalName();

                // Get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                $filename = str_replace('_', '', $filename);

                // Filename to store with extension
                $filenametostore = $filename . '_' . time() . '.png';

                $watermark = Storage::get('public/images/miscellaneous/logo.png');
                $img = Image::make($request->file('image')->getRealPath())->encode('png')->insert($watermark, 'bottom-right', 10)->resize(1280, 720)->stream();
                $imgSmall = Image::make($request->file('image')->getRealPath())->encode('png')->insert($watermark, 'bottom-right', 10)->resize(350, 200)->stream();

                Storage::put('public/images/breeds/posts/' . $filenametostore, $img);
                Storage::put('public/images/breeds/' . $filenametostore, $imgSmall);

                // Store in DB
                $breed->img_link = Storage::url('public/images/breeds/' . $filenametostore);
            }
        }

        $breed->user_id = Auth::user()->id;
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

        // Check for correct user
        if ($breed->user_id !== Auth::id() || Auth::user()->isAdmin()) {
            $traits = explode(", ", $breed->traits);
            return view('breeds.edit')->with('breed', $breed)->with('traits', $traits);
        }

        return redirect('/breeds')->with('error', 'You are not the author of this breed!');

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
        $breed = Breed::find($id);
        if ($breed->user_id === Auth::id() || Auth::user()->isAdmin()) {
            $this->validate($request, [
                'breed' => 'required',
                'image' => 'nullable|image|max:1999',
                'history' => 'required',
                'height' => 'required',
                'weight' => 'required',
            ]);

            // Update Breed
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
                    // Store image
                    // Get filename with extension
                    $filenamewithextension = $request->file('image')->getClientOriginalName();

                    // Get filename without extension
                    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                    $filename = str_replace('_', '', $filename);

                    // Filename to store with extension
                    $filenametostore = $filename . '_' . time() . '.png';

                    $watermark = Storage::get('public/images/miscellaneous/logo.png');
                    $img = Image::make($request->file('image')->getRealPath())->encode('png')->insert($watermark, 'bottom-right', 10)->resize(1280, 720)->stream();
                    $imgSmall = Image::make($request->file('image')->getRealPath())->encode('png')->insert($watermark, 'bottom-right', 10)->resize(350, 200)->stream();

                    Storage::put('public/images/breeds/posts/' . $filenametostore, $img);
                    Storage::put('public/images/breeds/' . $filenametostore, $imgSmall);

                    // Store in DB
                    $breed->img_link = Storage::url('public/images/breeds/' . $filenametostore);
                }
            }

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
        if ($breed->user_id === Auth::id() || Auth::user()->isAdmin()) {
            if ($breed->img_link != Storage::url('public/images/miscellaneous/profile2dog.jpg')) {
                // Delete img
                // Storage::delete('public/images/'.$breed->img_link);
            }
            $breed->delete();
            return redirect('/breeds')->with('success', 'Breed Removed');
        }

        return redirect('/breeds')->with('error', 'You are not the author of this breed!');
    }

    /**
     * Exports the selected breed to PDF file
     *
     *
     */
    public function export_pdf($id)
    {
        // TEMP
        $breed = Breed::find($id);
        $traits = explode(", ", $breed['traits']);
        $breed['traits']=$traits;
        // view('breeds.pdf');
        $pdf = PDF::loadView('breeds.pdf', $breed);

        // Download the file using download function
        return $pdf->download($breed->breed.'.pdf');
    }

    private function convert_breed_to_html($id) {
        // Fetch breed from database
        $breed = Breed::find($id);
        $traits = explode(", ", $breed['traits']);


    }
}
