<?php
namespace App\Http\Middleware;

use Closure;
use Auth;

class Authenticate
{
    public function handle($request, Closure $next)
		{
			 if(Auth::check() && ((bool) Auth::user()->is_admin == true)) {
			 		return $next($request);
			 }
			 return redirect('login');
		}
}
