<?php

namespace App\Http\Controllers\V1\Mentor\Appointments;

use App\Http\Controllers\Controller;
use App\Models\Booking\Booking;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    public function index()
    {
        $mentor_id = Auth::user()->id;
        $bookings = Booking::with('mentee', 'timing')->where('mentor_id',$mentor_id )->get();
        // return $bookings;
        $about = MentorAbout::where('mentor_id', $mentor_id)->first();
        return view('Mentor.Appointments.appointments')->with([
            'about'=> $about,
            'bookings'=> $bookings
        ]);
    }
}
