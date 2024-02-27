<?php

namespace App\Http\Controllers;

use App\Mail\NewNotification;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Preference;
use App\Models\SourceRss;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function newRss(Request $r)
    {
        $source = new SourceRss();
        $source->category_id = $r->category_id;
        $source->rss_link = $r->link;
        $source->name = $r->name;
        $source->save();
        $post = 0;
        $this->sendEmailNotificationToInterestedUsers($r->category_id);

        return redirect('/Rss');
    }

    /***
     * envoyer un email apres l'insertion des postes
     */
    private function sendEmailNotificationToInterestedUsers($categories)
    {
        $preferences = Preference::where('category_id', $categories)->get();

        foreach ($preferences as $preference) {
            $user = User::find($preference->user_id); // Assuming there's a relationship between Preference and User
            if ($user) {
                Mail::to($user->email)->send(new NewNotification($user));
            }
        }
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
