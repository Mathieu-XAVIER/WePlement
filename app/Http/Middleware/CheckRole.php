<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check())
            return redirect('login');

        $user = Auth::user();

        if ($user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3)
            return $next($request);

         abort(403, "Vous n'avez pas l'autorisation d'accéder à cette page");
    }
}
