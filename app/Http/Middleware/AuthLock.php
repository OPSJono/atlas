<?php

namespace Atlas\Http\Middleware;

use Closure;

class AuthLock
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->user()) {
            return $next($request);
        }


        // Allow login/out and locked/unlock requests to pass through this middleware.
        if(in_array($request->getUri(), [
            route('auth.login.locked'),
            route('auth.login.unlock'),
            route('auth.logout'),
            route('auth.login'),
        ])) {
            return $next($request);
        }

        // If the user does not have this feature enabled, then just return next.
        if (!$request->user()->hasLockoutTime()) {
            // Check if previous session was set, if so, remove it because we don't need it here.
            if (session('lock-expires-at')) {
                session()->forget('lock-expires-at');
            }

            return $next($request);
        }

        // Redirect to the Lock screen.
        if ($lockExpiresAt = session('lock-expires-at')) {
            // Only if the timer has expired
            if ($lockExpiresAt < now()) {
                // And only if it's not already a request to view the lockscreen.
                return redirect()->route('auth.login.locked');
            }
        }

        session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);

        return $next($request);
    }
}
