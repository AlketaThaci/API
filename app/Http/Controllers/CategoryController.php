<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;


class CategoryController extends Controller
{
    public function index()
    {
        $categories= Category::all();

        return  response()->json($categories);
    }


    public function store(StoreCategoryRequest $request)
    {
        $category=new category;

        $category->name=$request->name;
        $category->description=$request->description;

        $category->save();

        return  response()->json($category);
    }

    public function show($id)
    {
        $categories=category::FindOrFail($id);
        return response()->json($categories);
    }


    public function destroy($id)
    {
        $category= category::FindOrFail($id);

        $category->delete();

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

