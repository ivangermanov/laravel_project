<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Image;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified profile by id.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('profile.show')->with('user', $user);
    }

    /**
     * Display the profile's gallery.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_gallery()
    {
        return view('profile.gallery');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Handling the image
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                // Store image
                // Get filename with extension
                $filenamewithextension = $request->file('image')->getClientOriginalName();

                // Get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                // Get file extension
                $extension = $request->file('image')->getClientOriginalExtension();

                // Filename to store with extension
                $filenametostore = $filename . '_' . time() . '.png';
                
                // Upload File
                $request->file('image')->storeAs('public/images/profile', $filenametostore);
                //$request->file('image')->storeAs('public/images/profile/thumbnail', $filenametostore);

                // Resize image here
                //return Storage::url('public/images/miscellaneous/roundmask.png');
                $img = Image::make($request->file('image')->getRealPath())->fit(250,250)->encode('png');

                $width = $img->getWidth();
                $height = $img->getHeight();
                $mask = Image::canvas($width, $height);

                $mask->circle($width, $width/2, $height/2, function($draw) {
                    $draw->background('#fff');
                });

                $img->mask($mask);
                $img->stream();
                
                if (!Storage::exists('public/images/profile/thumbnail/')) {
                    Storage::makeDirectory('public/images/profile/thumbnail/'); //creates directory
                }

                Storage::put('public/images/profile/thumbnail/'.$filenametostore, $img);
                //$img->save($thumbnailpath);
                return 'success';
                // Store in DB
                //$breed->img_link = 
            }
        }

        $this->validate($request, [
            'password' => 'nullable|min:4',
            'conf-pass' => 'nullable|same:password',
            'image' => 'nullable|image|max:1999',
        ]);

        $user = Auth::user();
        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }
        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }
        if ($request->filled('country')) {
            $user->country = $request->input('country');
        }
        if ($request->filled('breed')) {
            $user->breed = $request->input('breed');
        }
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        if ($request->filled('description')) {
            $user->description = $request->input('description');
        }

        $user->dob = date("Y-m-d", strtotime($request->date));
        $user->save();

        return view('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $user = Auth::user();
        $user->delete();
        return redirect('/');
    }
}
