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
    
        $favoris = Favoris::where('user_id', $user->id)->pluck('post_id');
    
        return view('News.collectionPage', compact('postsByCategory', 'categories', 'favoris'));
    }
    

    public function insertPost(Request $r)
    {
        $rssToInsert = new SourceRss();
        $catRssLink = $rssToInsert->all();


        foreach($catRssLink as $rss){
            $category = $rss->category_id;
            $rss_feed_data = file_get_contents($rss->rss_link);
            $rss = simplexml_load_string($rss_feed_data);

            foreach ($rss->channel->item as $item) {
                $p = new Post();
                $p->title = $item->title;
                $p->description = $item->description;
                $p->category_id = $category;
                $p->image = $item->enclosure['url'];
                $p->save();
            }
        }
        // Clear cache related to posts or categories after insertion
    Cache::forget('categories');
    foreach ($catRssLink as $rss) {
        Cache::forget('posts_' . $rss->category_id);
    }
    }



    public function allPosts()
    {
        $Posts = Post::all();
        return view('News.tendancePage', compact('Posts'));
    }

}
