<?php

namespace App\Http\Controllers\V1\Mentor\Meeting;

use App\Http\Controllers\Controller;
use App\Http\Traits\MeetingZoomTrait;
use App\Models\Booking\Booking;
use App\Models\Meeting\Meeting;
use App\Models\Mentor\Profile\MentorAbout;
use Exception;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;

class OnlineMeetingsController extends Controller
{
    use MeetingZoomTrait;

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

    public function store(Request $request)
    {
        // return $request;
        // $meeting = $this->createMeeting($request);

        $user = auth()->user();

    // Create a new Zoom meeting
    $meeting = Zoom::user($user->id)->meetings()->make([
        'topic' => 'New Meeting',
        'start_time' => $request->start_time,
        'duration' => $request->duration,
            'password' => $request->password,
            'timezone' => 'Africa/Cairo'
        // Other meeting parameters
    ]);

    // Save the meeting
    $meeting->save();



    // Access the meeting details
    $meetingId = $meeting->id;
    $startUrl = $meeting->start_url;
    $joinUrl = $meeting->join_url;
    $password = $meeting->password;
    $duration = $meeting->duration;

    Meeting::create([
        'mentor_id' => auth()->user()->id,
        'mentee_id' => $meetingId,
        'meeting_id' => $meeting->id,
        'start_at' => $request->start_time,
        'duration' => $duration,
        'password' => $password,
        'start_url' => $startUrl,
        'join_url' => $joinUrl,
    ]);

    return back()->with('success', 'Zoom Meeting has been created successfully');



        //     $user = Zoom::user(auth()->user()->id)->first();

        //     // if ($user !== null) {
        //     //     foreach ($user as $item) {
        //     //         dd($item) ;
        //     //     }
        //     // }


        // $meetingData = [
        //     'topic' => "new meeting",
        //     'duration' => $request->duration,
        //     'password' => $request->password,
        //     'start_time' => $request->start_time,
        //     'timezone' => config('zoom.timezone')
        //   // 'timezone' => 'Africa/Cairo'
        // ];
        // $meeting = Zoom::meeting()->make($meetingData);

        // $meeting->settings()->make([
        //     'join_before_host' => false,
        //     'host_video' => false,
        //     'participant_video' => false,
        //     'mute_upon_entry' => true,
        //     'waiting_room' => true,
        //     'approval_type' => config('zoom.approval_type'),
        //     'audio' => config('zoom.audio'),
        //     'auto_recording' => config('zoom.auto_recording')
        // ]);

        //  $user->meetings()->save($meeting);

        // Meeting::create([
        //     'mentor_id' => auth()->user()->id,
        //     'mentee_id' => $request->mentee_id,
        //     'meeting_id' => $meeting->id,
        //     'start_at' => $request->start_time,
        //     'duration' => $meeting->duration,
        //     'password' => $meeting->password,
        //     'start_url' => $meeting->start_url,
        //     'join_url' => $meeting->join_url,
        // ]);

        // return back()->with('success', 'Zoom Meeting has been created successfully');
    }
}
