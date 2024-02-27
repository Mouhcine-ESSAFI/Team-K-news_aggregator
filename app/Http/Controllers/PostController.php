<?php

namespace App\Http\Controllers;

use App\Mail\NewPostNotification;
use App\Models\Categories;
use App\Models\Post;
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
            // Send email notification to users
            $this->sendEmailNotificationToUsers($p);
        }
    }

    /***
     * envoyer un email apres l'insertion des postes
     */
    private function sendEmailNotificationToUsers(Post $post)
    {
        $users = User::all();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new NewPostNotification($user, $post));
        }
    }

    public function allPosts()
    {
        $Posts = Post::all();
        return view('News.tendancePage', compact('Posts'));
    }

}
