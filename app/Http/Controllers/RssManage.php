<?php

namespace App\Http\Controllers;

use App\Models\SourceRss;
use Illuminate\Http\Request;

class RssManage extends Controller
{
    /**
     * 
     */
    public function newRss(Request $r){
        $source = new SourceRss();
        $source->category_id = 1;
        $source->rss_link = $r->link;
        $source->name = $r->name;
        $source->save();
    }
}
