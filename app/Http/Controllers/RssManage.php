<?php

namespace App\Http\Controllers;

use App\Models\SourceRss;
use Illuminate\Http\Request;

class RssManage extends Controller
{
    /***
     * show all categories in the form
     * show all rss links
     */
    public function index()
    {
        $categories = Categories::all();
        $links = SourceRss::all();

        return view('dashboard', compact('categories', 'links'));
    }

    /**
     * inserts a new rss to source table
     */
    public function newRss(Request $r){
        $source = new SourceRss();

        $source->category_id = 1;
        $source->rss_link = $r->link;
        $source->name = $r->name;
        $source->save();
    }
}
