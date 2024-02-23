<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        Categories::create([
            'name' => $request->name
        ]);

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->route('home');
    }


    public function displayCategories()
    {
        $categories = Categories::orderBy('created_at', 'desc')->get();
        return view('Authentication.authentication', ['categories' => $categories]);
    }
}
