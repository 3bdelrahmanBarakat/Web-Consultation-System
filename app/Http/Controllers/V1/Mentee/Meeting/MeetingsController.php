<?php

namespace App\Http\Controllers\V1\Mentee\Meeting;

use App\Http\Controllers\Controller;
use App\Models\Meeting\Meeting;
use Illuminate\Http\Request;

class MeetingsController extends Controller
{
    public function index()
    {
        $mentee_id = auth()->guard('mentee')->user()->id;
        $meetings = Meeting::with('mentor.about')->where('mentee_id', $mentee_id)->paginate();

        return view('Mentee.Meeting.meetings')->with('meetings', $meetings);
    }
}
