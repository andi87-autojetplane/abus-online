<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->banned_until && now()->lessThan(auth()->user()->banned_until)) {
            $banned_days = now()->diffInDays(auth()->user()->banned_until);
            auth()->logout();

            if ($banned_days > 14) {
                $status = 'Akun anda ditangguhkan. Silahkan Hubungi Administrator.';
            } else {
                // $message = 'Akun anda ditangguhkan. Selama '.$banned_days.' '.Str::plural('hari', $banned_days).' Silahkan Hubungi Administrator.';
                $status = 'Akun anda ditangguhkan selama '.$banned_days.' hari. Silahkan Hubungi Administrator.';
            }

            return redirect()->route('login')->withMessage($status);
        }

        return $next($request);
    }
}
