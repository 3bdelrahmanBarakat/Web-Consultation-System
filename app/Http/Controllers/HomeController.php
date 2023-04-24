<?php

namespace App\Http\Controllers;

use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about = MentorAbout::where('mentor_id', Auth::user()->id)->first();
        return view('Mentor.dashboard')->with('about', $about);
    }
}
