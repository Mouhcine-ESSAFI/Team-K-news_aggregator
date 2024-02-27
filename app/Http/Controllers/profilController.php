<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Preference;
use App\Models\Categories;


class profilController extends Controller
{
    public function showProfil()
    {
        $idUser = session()->get('user_id');

        $userInfos = [
            'name' => session()->get('user_name'),
            'email' => session()->get('user_email')
        ];

        $preferences = Preference::where('user_id', $idUser)->get();
        
        $categories = [];
        
        foreach ($preferences as $preference) {
            $categoryId = $preference->category_id;
        
            $category = Categories::find($categoryId);
        
            if ($category) {
                $categories[] = $category;
            }
        }
        
        return view('Authentication.authentication', compact('categories','userInfos'));
    }


}
