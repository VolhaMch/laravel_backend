<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = 'en';
        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
        }else{
            if(isset($_COOKIE['lang'])){
                $lang = $_COOKIE['lang'];
            }else{
                $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            }
        }
        App::setLocale($lang);
        setcookie('lang', $lang, time()+3600, '/');
        return $next($request);
    }
}
