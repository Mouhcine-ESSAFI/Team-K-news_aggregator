<?php

namespace App\Http\Controllers;

use App\Mail\NewNotification;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Preference;
use App\Models\SourceRss;
use App\Models\Favoris;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Xml\Source;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * this function retrieves categories and posts from cache if they are not in the cache or the cache is expired it retrieves them from the database and caches them
     *
     */
    public function showPosts()
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
        $favoris="";
        if($user)
        {
            $favoris = Favoris::where('user_id', $user->id)->pluck('post_id');
        }

        return view('News.collectionPage', compact('postsByCategory', 'categories', 'favoris'));
    }

    public function showPostsTrends()
    {
        $categories = Cache::remember('categories', 60, function () {
            return Categories::all();
        });
        $poststrends = [];

        foreach ($categories as $category) {
            $posts = Cache::remember('posts_' . $category->id, 60, function () use ($category) {
                return Post::where('category_id', $category->id)->orderByDesc('trending_score')->limit(6)->get();
            });

            $poststrends[$category->name] = $posts;
        }

        $user = Auth::user();

        $favoris = Favoris::where('user_id', $user->id)->pluck('post_id');

        return view('News.tendancePage', compact('poststrends', 'categories', 'favoris'));
    }

    public function allPosts()
    {
        $Posts = Cache::remember('all_posts', 60, function () {
            return Post::all();
        });

        return view('News.tendancePage', compact('Posts'));
    }


}
