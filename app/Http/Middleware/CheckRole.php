<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // Middleware: CheckRoleMiddleware.php

    public function handle($request, Closure $next, ...$roles)
    {
        // Check if the user has the required role
        if ($request->user() && in_array($request->user()->role, $roles)) {
            return $next($request);
        }

       // dd($request->user());

        // Redirect based on role
        if ($request->user() && $request->user()->role === 'admin') {
            return redirect('/dashboard')->with('error', 'Unauthorized access.');
        } else {
            return redirect('/preferences')->with('error', 'Unauthorized access.');
        }
    }


}
