<?php

namespace App\Http\Controllers;

use App\Mail\NewNotification;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Preference;
use App\Models\SourceRss;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Xml\Source;

class PostController extends Controller
{
    public function showPosts()
    {
        $categories = Categories::all();

        $postsByCategory = [];

        foreach ($categories as $category) {
            $posts = Post::where('category_id', $category->id)->limit(6)->get();

            $postsByCategory[$category->name] = $posts;
        }

        return view('News.collectionPage', compact('postsByCategory', 'categories'));
    }



    public function allPosts()
    {
        $Posts = Post::all();
        return view('News.tendancePage', compact('Posts'));
    }

}
