<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function displayCategories()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('Authentication.authentication', ['categories' => $categories]);
    }

}
