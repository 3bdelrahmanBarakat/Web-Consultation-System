<?php

namespace App\Http\Controllers\V1\Mentor\Appointments;

use App\Http\Controllers\Controller;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    public function index()
    {
        $about = MentorAbout::where('mentor_id', Auth::user()->id)->first();
        return view('Mentor.Appointments.appointments')->with('about', $about);
    }
}
