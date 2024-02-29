<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Categories;
use App\Models\SourceRss;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class RegisterController extends Controller
{

    public function register(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'files' => 'required|array',
            'files.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Create user
        $user = User::create([
            'name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'user', // default role
        ]);

        // Set the first registered user as admin
        if (User::count() == 1) {
            $user->role = 'admin';
        }

        // Handle file upload
        foreach ($request->file('files') as $file) {
            $storedFile = $file->store('uploads');

            $media = $user->addMedia(storage_path('app/' . $storedFile))->toMediaCollection();

            $user->id_picture = $media->id;
            $user->save();
        }

        // Passport token issue logic
        $client = Client::where('password_client', 1)->first();

        $tokenRequest = $request->create('/oauth/token', 'post', [
            'grant_type' => 'password',
            'client_id' => $client->id,
            'client_secret' => $client->secret,
            'username' => $request->input('email'),
            'password' => $request->input('password'),
            'scope' => '',
        ]);

        $response = app()->handle($tokenRequest);

        // Add the access token to the user or handle the response as needed
        $data = json_decode($response->getContent(), true);
        $user->access_token = $data['access_token'];
//        $user->save(); // Save the changes to the user

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function showUserStatistics()
    {
        $userStatistics = User::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as user_count')
        )
        ->groupBy('date')
        ->get();

        // dd($userStatistics);
        $categories = Categories::all();

        $links = SourceRss::all();
        // Nombre total d'abonnés
        $data = [
            'totalUsers' => User::count(),
            'totalPosts' => Post::count(),
            'categories' => Categories::paginate(4, ['*'], 'categories'),            
            'users' => User::paginate(4, ['*'], 'users'),            
            'totalCategories' => Categories::count(),
            'totalRss' => SourceRss::count(),
        ];
        
        return view('dashboard', [
            'userStatistics' => $userStatistics,
            'data' => $data
        ]);
        
    }
}
