<?php

namespace App\Http\Middleware\Mentor\Profile;

use App\Models\Mentor\Profile\Experience;
use App\Models\Mentor\Profile\MentorAbout;
use App\Models\Mentor\Profile\Plan;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $about_exists = MentorAbout::where('mentor_id', Auth::user()->id)->first();
        $experience_exists = Experience::where('mentor_id', Auth::user()->id)->first();
        $plan_exists = Plan::where('mentor_id', Auth::user()->id)->first();

        if(!$about_exists)
        {
            return redirect()->route('about');
        }

        elseif(!$experience_exists)
        {
            return redirect()->route('experience');
        }

        elseif(!$plan_exists)
        {
            return redirect()->route('plan');
        }

        return $next($request);

    }
}
