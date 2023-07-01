<?php

namespace App\Http\Controllers\V1\Mentor\Apointments;

use App\Http\Controllers\Controller;
use App\Models\Booking\Booking;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;

class ApointmentsController extends Controller
{
    public function index()
    {
        $mentor_id = auth()->guard('web')->user()->id;
        $apointments = Booking::with('timing','mentor','mentee','meeting')->where('mentor_id', $mentor_id )->where('status', 'accepted')->get();
        $about = MentorAbout::where('mentor_id', $mentor_id)->first();
        return view('Mentor.Apointments.apointments')->with([
            'apointments'=>$apointments,
            'about'=>$about
        ]);
    }
}
