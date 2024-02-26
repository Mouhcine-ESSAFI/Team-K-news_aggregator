<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Passport\Client;
use Laravel\Passport\Token;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
                $request->session()->regenerate();
                $request->session()->put('user_id', $user->id);
                //dd($request->session()->get('user_id'));


                // Check user role and redirect accordingly
                if ($user->role === 'admin') {
                    return redirect('/dashboard')->with('success', 'Login successful!');
                } else {
                    return redirect('/preferences')->with('success', 'Login successful!');
                }
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" => 'User does not exist'];
            return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
        }
    }



    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        // Clear the user's session data
        $request->session()->forget('user_id');

        // Redirect to the login page with a success message
        return redirect('/login')->with('success', 'Logout successful!');
    }

}
