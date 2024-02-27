<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Preference;
use App\Models\Categories;


class ProfilController extends Controller
{
    public function showProfil()
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Get user information from the authenticated user
        $user = auth()->user();

        $userInfos = [
            'name' => $user->name,
            'email' => $user->email
        ];

        $preferences = Preference::where('user_id', $user->id)->get();

        $categories = [];

        foreach ($preferences as $preference) {
            $categoryId = $preference->category_id;

            $category = Categories::find($categoryId);

            if ($category) {
                $categories[] = $category;
            }
        }
//        dd($userInfos, $categories);


        return view('Authentication.authentication', compact('categories', 'userInfos'));
    }


}
