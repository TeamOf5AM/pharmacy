<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!empty(env('DB_DATABASE')) && !empty(env('DB_USERNAME')) && !empty(env('DB_PASSWORD'))) {
            return $next($request);
        } else {
            return redirect()->route('LaravelInstaller::welcome');
        }
        if (session('local')) {
            App::setLocale(session()->get('local'));
            return $next($request);
        } else {
            session(['local' => 'en']);
            App::setLocale(session()->get('local'));
            return $next($request);
        }
    }
}
