<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function insertPost(Request $r)
    {
        $rss_feed_url = 'https://www.france24.com/fr/rss';
        
        $rss_feed_data = file_get_contents($rss_feed_url);
        $rss = simplexml_load_string($rss_feed_data);
        
        foreach ($rss->channel->item as $item) {
            $p = new Post();
            
            $p->title = $item->title;
            $p->description = $item->description;
            $p->category = $item->category;
            
            $p->save();
        }
    }
}
