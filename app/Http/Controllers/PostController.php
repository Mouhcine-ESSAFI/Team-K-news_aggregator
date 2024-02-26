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
        $catRssLink = new SourceRss();
        $catRssLink->all();
        
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
