<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path(); //get the path
        // if path is login/register and user is logged in then don't show them login/register page
        if(($path == 'login' || $path == 'register') && Session::get('user'))
        {
            return redirect('/');
        }
        //if path is neither login nor register and user is not logged in then show them log in page
        else if(($path != 'login' && !Session::get('user')) && ($path != 'register' && !Session::get('user')))
        {
            return redirect('/login');
        } 
        return $next($request);
    }
}
