<?php

namespace App\Http\Controllers\V1\Mentor\Profile;

use App\Http\Controllers\Controller;
use App\Models\Mentor\Profile\Experience;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $about = MentorAbout::where('mentor_id', Auth::user()->id)->first();
        $experience = Experience::where('mentor_id', Auth::user()->id)->first();

        return view('Mentor.Profile.profile')->with(
            [
                'about' => $about,
                'experience' => $experience
            ]);
    }
}
