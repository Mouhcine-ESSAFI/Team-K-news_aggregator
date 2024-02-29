<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ContentController extends Controller
{

    public function index(Request $request)
    {
        //
    }

    public function fetchComments($postId)
    {
        $comments = Comment::where('post_id', $postId)
            ->with(['user' => function($query){
                $query->select('id', 'name');
            }])
            ->get(['content', 'created_at', 'created_by'])
            ->map(function ($comment) {
                if ($user = $comment->user) {
                    $media = $user->getMedia();
                    $user->profile_picture_url = $media->first()->getUrl();
                }
                return $comment;
            });

        return response()->json($comments);
    }




    public function upload(Request $request)
    {

        $data=new Comment;
        $data->content=$request->content;
        $data->post_id=$request->postId;
        $user = Auth::user();
        $data->created_by=$user->id;

        $data->save();
        return response()->json(['message'=>'data uploaded successfully']);

    }

    public function show($slug)
    {
        $data = [
            'categories' => Categories::all(),
            'post' => Post::where('slug', $slug)->first(),
            'lastPosts' => Post::latest()->take(3)->get()
        ];
        // dd($data);
        return view('News.contentPage', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
