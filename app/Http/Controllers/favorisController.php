<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favoris;
use App\Models\Post;


class favorisController extends Controller
{
    public function addToFavoris(Request $request)
    {
        $request->validate([
            'postId' => 'required',
        ]);

        // dd($request->postId);
        $user = Auth::user();

        Favoris::create([
            'post_id' => $request->postId,
            'user_id' => $user->id,
        ]);

        return redirect()->route('showPosts');
    }

    public function removeToFavoris(Request $request)
    {
        $request->validate([
            'postId' => 'required',
        ]);
    
        $user = Auth::user();
        $postId = $request->postId;
    
        Favoris::where('user_id', $user->id)
                ->where('post_id', $postId)
                ->delete();
    
        return redirect()->route('showPosts');
    }

}
