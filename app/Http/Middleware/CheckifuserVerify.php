<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\support\facades\Auth;
class CheckifuserVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    	if(!Auth::check())
    	{
    		return redirect()->route('login');
    	}
    	if(Auth::user()->is_verify==1){
    	   return $next($request); 
    	}
    	else
    	{
    	 abort(403, 'Account not verified');
    	}
    }
}
