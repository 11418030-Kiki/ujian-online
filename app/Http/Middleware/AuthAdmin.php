<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

    public function handle($request, Closure $next)
    {

        if (Auth::check() && Auth::user()->role == 1)
        {
            return $next($request);
        }
        elseif(Auth::check())
        {
        	return response('Unauthorized.', 401);
        }
        else
        {
            return view('content/login/login_form');
        }

		//return redirect('home');

    }


}
