<?php

namespace App\Http\Controllers\V1\Mentor\Meeting;

use App\Http\Controllers\Controller;
use MacsiDigital\Zoom\Facades\Zoom;
use App\Models\ZoomMeeting;
use App\Http\Requests\API\V1\Mentor\Meetings\StoreMeetRequest;
use App\Http\Requests\V1\Mentor\Meeting\OnlineMeetingRequest;
use App\Models\Booking\Booking;
use App\Models\Meeting\Meeting;
use App\Models\Mentor\Profile\MentorAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OnlineMeetingsController  extends Controller
{



    public function index()
    {

        $meetings = Meeting::with('mentee')->where('mentor_id', auth()->user()->id)->get();
        $mentees = Booking::with('mentee')->where('mentor_id', auth()->user()->id)->distinct()->get("mentee_id","mentee");
        $about = MentorAbout::where('mentor_id', auth()->user()->id)->first();
        return view('Mentor.Meeting.meetings')->with([
            'meetings'=> $meetings,
            'about'=> $about,
            'mentees'=> $mentees
        ]);
    }

    public function store(OnlineMeetingRequest $request)
    {

            $meet_data = [
                'topic' => "new topic",
                'start_time' => $request->start_time,
                'duration' => $request->duration,
                'password' => $request->password,
                'time_zone' => "Africa/Cairo",
            ];

            $meeting = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->generateJWT(),
                'Content-Type' => 'application/json',
            ])->post('https://api.zoom.us/v2/users/me/meetings', $meet_data)->json();

             Meeting::create([
                'mentor_id' => auth()->user()->id,
                'mentee_id' => $request->mentee_id,
                // 'booking_id' => $request->validated('booking_id'),

                'meeting_id' => $meeting['id'],
                'topic' => $meeting['topic'],
                'start_at' => Carbon::parse($meeting['start_time']),
                'duration' => $meeting['duration'],
                'password' => $meeting['password'],
                'start_url' => $meeting['start_url'],
                'join_url' => $meeting['join_url'],
            ]);

            return back()->with('success', 'Zoom Meeting has been created successfully');

    }

    protected function generateJWT()
    {
        $key = config('zoom.api_key');
        $secret = config('zoom.api_secret');

        $payload = [
            'iss' => $key,
            'exp' => time() + 60,
        ];

        return \Firebase\JWT\JWT::encode($payload, $secret, 'HS256');
    }
}
