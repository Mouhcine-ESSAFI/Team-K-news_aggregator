<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
        $source->category_id = $r->category_id;
        $source->rss_link = $r->link;
        $source->name = $r->name;
        $source->save();
        return redirect('/Rss');
    }

    /**
     * delete Rss link
     */
    public function destroyLink($id)
    {
        $link = SourceRss::findOrFail($id);
        $link->delete();

        return redirect('/Rss');
    }
}
