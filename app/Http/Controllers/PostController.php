<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SourceRss;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Source;

class PostController extends Controller
{
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
    }

    public function allPosts()
    {
        $Posts = Post::all();
        return view('News.tendancePage', compact('Posts'));
    }

}
