<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class AgeMiddle
{
    public function handle($request, Closure $next)
    { $user=User::where([['email','=',$request->email],['password','=',$request->pass]])->get()->first();
	if($user)
		return $next($request);
		 return redirect('a');
			
		
        
    }
}
