<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8',
        'picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle file upload
    $picturePath = null;
    if ($request->hasFile('picture')) {
        $picturePath = $request->file('picture')->store('profile_images', 'public');
    }

    // Create a new user
    $user = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'picture' => $picturePath, // Assuming a 'profile_picture' column in your users table
    ]);

    // Generate a token for the newly registered user
    $token = $user->createToken('api-token')->plainTextToken;

    // Return a response with the user details and token
    return response()->json([
        'user' => $user,
        'token' => $token,
        'message' => 'Registration successful',
    ], 201);
}
}
