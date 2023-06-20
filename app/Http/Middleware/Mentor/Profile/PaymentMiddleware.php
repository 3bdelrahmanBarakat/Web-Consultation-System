<?php

namespace App\Http\Middleware\Mentor\Profile;

use App\Models\Mentor\Mentor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $status = Mentor::where('id',auth()->user()->id)->value('status');
        if($status == 1)
        {
            return back();
        }
        return $next($request);
    }
}
