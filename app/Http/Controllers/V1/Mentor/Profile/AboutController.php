<?php

namespace App\Http\Controllers\V1\Mentor\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentor\Profile_setup\AboutRequest;
use App\Models\Mentor\Profile\Experience;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function index()
    {
        return view('Mentor.Profile.about');
    }

    public function store(AboutRequest $request)
    {

        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
        }

        MentorAbout::create([
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'job_title' => $request->job_title,
            'bio' => $request->bio,
            'mentor_id' => $request->mentor_id,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'photo' => $filename
        ]);

        return redirect()->route('experience');
    }
}
