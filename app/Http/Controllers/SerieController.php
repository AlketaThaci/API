<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
    {
        $series= Serie::all();

        return  response()->json($series);
    }


    public function store(StoreSerieRequest $request)
    {
        $serie=new serie;

        $serie->name=$request->name;
        $serie->description=$request->description;

        $serie->save();

        return  response()->json($serie);
    }

    public function show($id)
    {
        $series=serie::FindOrFail($id);
        return response()->json($series);
    }


    public function destroy($id)
    {
        $serie= serie::FindOrFail($id);

        $serie->delete();

        return response()->json([
            'message'=>'Category was deleted'
        ]);
    }

    public function update(UpdateCategoryRequest $request,$id)
    {
        $serie->name->$requets->name;
        $serie->description->$request->description;

        $serie->update();

        return response()->json([
            'message'=>'User was updated successfully'
        ]);
    }
}
