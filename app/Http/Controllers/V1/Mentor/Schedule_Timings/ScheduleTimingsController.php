<?php

namespace App\Http\Controllers\V1\Mentor\Schedule_Timings;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentor\Schedule_Timings\ScheduleTimingsRequest;
use App\Models\Mentor\Profile\Experience;
use App\Models\Mentor\Profile\MentorAbout;
use App\Models\Mentor\Schedule_Timings\ScheduleTiming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ScheduleTimingsController extends Controller
{
    public function index()
    {

        $timings = ScheduleTiming::where('mentor_id', Auth::guard('web')->user()->id)->where('status' , 'pending')->get();
        $about = MentorAbout::where('mentor_id', Auth::guard('web')->user()->id)->first();
        return view('Mentor.Schedule_timings.schedule_timings')->with(
            [
            'about' => $about,
            'timings' => $timings
            ]
        );
    }

    public function store(ScheduleTimingsRequest $request)
    {

        // $startTimeValue = $request->start_time;
        // $startTimeParts = explode(":", $startTimeValue);
        // $halfHourValue = $startTimeParts[0].":30";

        ScheduleTiming::create([
            'mentor_id' => Auth::guard('web')->user()->id,
            'status' => 'pending',
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'duration' => 'hour'
        ]);

        // ScheduleTiming::create([
        //     'mentor_id' => Auth::user()->id,
        //     'status' => 'pending',
        //     'day' => $request->day,
        //     'start_time' => $request->start_time,
        //     'end_time' => $halfHourValue,
        //     'duration' => 'half'
        // ]);

        // ScheduleTiming::create([
        //     'mentor_id' => Auth::user()->id,
        //     'status' => 'pending',
        //     'day' => $request->day,
        //     'start_time' => $halfHourValue,
        //     'end_time' => $request->end_time,
        //     'duration' => 'half'
        // ]);

        return back()->with('Add', 'The Schedule Timing has been created successfully');
    }

    public function delete_timing($id)
    {
        ScheduleTiming::findOrFail($id)->delete();
        return back()->with('Delete', 'The Schedule Timing has been deleted successfully');
    }


}
