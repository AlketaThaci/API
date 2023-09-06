<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies= Movie::all();

        return  response()->json($movies);
    }


    public function store(StoreMovieRequest $request)
    {
        $movie=new movie;

        $movie->name=$request->name;
        $movie->description=$request->description;

        $movie->save();

        return  response()->json($movie);
    }

    public function show($id)
    {
        $movies=movie::FindOrFail($id);
        return response()->json($movies);
    }


    public function destroy($id)
    {
        $movie= movie::FindOrFail($id);

        $movie->delete();

        return response()->json([
            'message'=>'Category was deleted'
        ]);
    }

    public function update(UpdateCategoryRequest $request,$id)
    {
        $category->name->$requets->name;
        $category->description->$request->description;

        $category->update();

        return response()->json([
            'message'=>'User was updated successfully'
        ]);
    }
}
