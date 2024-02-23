<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{

    public function register(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('profile_images', 'public');
        }

        // Create user
        $user = User::create([
            'name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'picture' => $imagePath,
        ]);

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

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}
