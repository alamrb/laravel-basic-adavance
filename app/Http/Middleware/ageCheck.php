<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "<pre>";
        // print_r($request->age);
        // if ($request->age < 18) {
        //     die('your can not visit this site');
        // }
        // echo "age Check";
        // if ($request->age < 18) {
        //     die('your can not visit this site');
        // }
        return $next($request);
    }
}
