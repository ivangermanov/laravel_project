<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Breeds as BreedResource;
use App\Breed;


class BreedsApiController extends Controller
{
    public function index()
    {
        $breeds = Breed::with('user')->orderBy('breed')->get();//->paginate(9);
        
        return BreedResource::collection($breeds);
    }
    
    public function show($id)
    {
        $breed = Breed::FindOrFail($id);
        //$breed->visits = $breed->visits + 1;
        //$breed->save();
        return new BreedResource($breed);
    }

    public function destroy($id)
    {
        $breed = Breed::FindOrFail($id);
        $breed->delete();
    }
}
