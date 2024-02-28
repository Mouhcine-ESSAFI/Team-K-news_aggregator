<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        // Attempt to authenticate the user
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Create a new personal access token for the user
            $token = $user->createToken('Laravel Password Grant Client')->accessToken;

            // Your session handling logic
            $request->session()->regenerate();
            $request->session()->put('user_id', $user->id);
            $request->session()->put('user_name', $user->name);
            $request->session()->put('user_email', $user->email);

            // Check user role and redirect accordingly
            if ($user->role === 'admin') {
                return redirect()->intended('/dashboard')->with('success', 'Login successful!');
            } else {
                return redirect()->intended('/preferences')->with('success', 'Login successful!');
            }
        } else {
            // Authentication failed
            $response = ["message" => "Invalid credentials"];
            return response($response, 422);
        }
    }





    public function logout(Request $request)
    {
        // Revoke the user's access tokens
        $request->user()->tokens()->delete();

        // Perform Laravel's built-in logout
        Auth::logout();

        // Clear the user data from the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout successful!');
    }

}
