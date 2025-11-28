<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        // Get locale from session, default to config
        $locale = Session::get('locale', config('app.locale'));
        
        // Set the application locale
        App::setLocale($locale);
        
        return $next($request);
    }
}