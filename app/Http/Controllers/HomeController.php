<?php

namespace App\Http\Controllers;

use App\Models\Booking\Booking;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mentor_id = auth()->guard('web')->user()->id;
        $about = MentorAbout::where('mentor_id', $mentor_id)->first();
        $total_earning = Booking::where('mentor_id',$mentor_id)->sum('total_fees');
        $mentees_count = Booking::where('mentor_id',$mentor_id)->distinct('mentee_id')->count('mentee_id');
        $bookings_count = Booking::where('mentor_id',$mentor_id)->count();

        $mentees_list = Booking::where('mentor_id',$mentor_id)
        ->with('mentee')
        ->distinct('mentee_id')
        ->get(['mentee_id']);

        // return $mentees_list;
        return view('Mentor.dashboard')->with([
            'about'=> $about,
            'mentees_count'=> $mentees_count,
            'bookings_count'=> $bookings_count,
            'total_earning'=> $total_earning,
            'mentees_list'=> $mentees_list,
        ]);
    }
}
