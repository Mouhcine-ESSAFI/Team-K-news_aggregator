<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function insertPost(Request $r)
    {
        $catRssLink = [
        "economy" => "https://www.france24.com/fr/%C3%A9co-tech/rss",
        "sport" => "https://www.france24.com/fr/sports/rss",
        "culture" => "https://www.france24.com/fr/culture/rss"];

        
        foreach($catRssLink as $category => $rss){
            $rss_feed_data = file_get_contents($rss);
            $rss = simplexml_load_string($rss_feed_data);
            
            foreach ($rss->channel->item as $item) {
                $p = new Post();
            
                $p->title = $item->title;
                $p->description = $item->description;
                $p->category = $category;
                $p->image = $item->enclosure['url'];
                $p->save();
            }
        }



    }
}
