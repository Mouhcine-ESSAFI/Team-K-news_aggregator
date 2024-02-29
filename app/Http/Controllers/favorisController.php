<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favoris;
use App\Models\Categories;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;



class favorisController extends Controller
{
    public function addToFavoris(Request $request)
    {
        $request->validate([
            'postId' => 'required',
        ]);
        
        // dd($request->postId);

        $user = Auth::user();
        $post = Post::find($request->postId);
        $post->increment('trending_score');

        Favoris::create([
            'post_id' => $request->postId,
            'user_id' => $user->id,
        ]);

        return redirect()->back();
    }

    public function removeToFavoris(Request $request)
    {
        $request->validate([

            'postId' => 'required',

        ]);

        $user = Auth::user();
        $post = Post::find($request->postId);
        $post->decrement('trending_score');

        $postId = $request->postId;

        Favoris::where('user_id', $user->id)

                ->where('post_id', $postId)

                ->delete();

        return redirect()->back();
    }

    public function showFavorites()
    {
        $categories = Cache::remember('categories', 60, function () {
            return Categories::all();
        });    
    
        $postsByCategory = [];
    
        foreach ($categories as $category) {
            $posts = Cache::remember('posts_' . $category->id, 60, function () use ($category) {
                return Post::where('category_id', $category->id)->limit(6)->get();
            });
    
            $postsByCategory[$category->name] = $posts;
        }
    
        $user = Auth::user();
        $favoris = Favoris::where('user_id', $user->id)->pluck('post_id');
    
        // Maintenant, récupérez les détails complets des postes aimés
        $favoritePosts = Post::whereIn('id', $favoris)->get();
    
        return view('News.favorites', compact('postsByCategory', 'categories', 'favoritePosts'));
    }
}
