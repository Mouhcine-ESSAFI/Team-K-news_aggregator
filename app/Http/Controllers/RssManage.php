<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SourceRss;
use Illuminate\Http\Request;

class RssManage extends Controller
{

    /***
     * show all categories in the form
     */
    public function index()
    {
        $categories = Categories::all();
        return view('dashboard', compact('categories'));
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
}
