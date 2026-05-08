<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

//This is a custom global middleware that will work on all routes.
class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "This is the age check middleware. <br>";
        // print_r($request->all()); // this will print all the data sent in the request (query parameters, form data, etc.)
        // print_r($request->age); // this will print the value of the 'age' parameter sent in the request (if it exists)
        // echo "<br>";
        
        if ($request->age < 18) {
            return response("You are not old enough to access this page.", status: 403);
        }

        return $next($request);
    }
}
