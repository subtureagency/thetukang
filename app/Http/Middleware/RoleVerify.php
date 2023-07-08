<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\RoleUser;
use App\Models\Role;
use App\Models\User;
use Auth;

class RoleVerify
{
    public function handle($request, Closure $next,$guard = null)
    {
      switch (true) {
        case strpos($request->fullUrl(),'dashboard'):
        if (Auth::user()->role() == "admin-brochure" ||
            Auth::user()->role() == "admin") {
          return abort(404);
        }

        break;
        case strpos($request->fullUrl(),'admin'):
        if (Auth::user()->role() == "delegate" ||
            Auth::user()->role() == "sponsor" ||
            Auth::user()->role() == "speaker") {
          return abort(404);
        }

        break;

        default:
        // code...
        break;
      }


      // if (Auth::guard($guard)->check()) { //isloggedin
      //   if (Auth::user()->role() == "admin-brochure") {
      //     return redirect()->route('backend.brochure.index');
      //   }
      //   if (Auth::user()->role() == "admin") {
      //     return redirect()->route('backend.dashboard');
      //   }
      //
      //   return redirect()->route('virtual-world');
      //
      //   // return redirect()->route('backend.dashboard');
      // }
      return $next($request);
    }
}
