<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Preference;
use Illuminate\Http\Request;

class preferenceController extends Controller
{
    public function addPreference(Request $request)
    {
        $request->validate([
            'selected_tags' => 'required|array',
        ]);

        $idUser = '1';

        foreach ($request->selected_tags as $categoryId) {
            Preference::create([
                'category_id' => $categoryId,
                'user_id' => $idUser,
            ]);
        }

        return redirect()->route('preferences.show');
    }

    public function displayCategories()
    {
        $categories = Categories::orderBy('created_at', 'desc')->get();
        return view('Authentication.authentication',compact('categories'));
    }
}
