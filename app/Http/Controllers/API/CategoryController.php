<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->nom = $request->nom;
        $category->acronim = $request->acronim;
        $category->save();
    }

    public function show($id)
    {
        $category = Category::find($id);
        return $category;
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->nom = $request->nom;
        $category->acronim = $request->acronim;
        $category->save();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
