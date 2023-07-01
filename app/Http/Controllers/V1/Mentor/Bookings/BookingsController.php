<?php

namespace App\Http\Controllers\V1\Mentor\Bookings;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentor\Meeting\OnlineMeetingRequest;
use App\Mail\BookingAccepted;
use App\Mail\BookingRejected;
use App\Models\Booking\Booking;
use App\Models\Mentor\Profile\MentorAbout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;

class BookingsController extends Controller
{
    public function index()
    {
        $mentor_id = Auth::guard('web')->user()->id;
        $bookings = Booking::with('mentee', 'timing')->where('mentor_id',$mentor_id )->where('status','pending')->get();
        $about = MentorAbout::where('mentor_id', $mentor_id)->first();
        return view('Mentor.Bookings.bookings')->with([
            'about'=> $about,
            'bookings'=> $bookings
        ]);
    }

    public function accept($id)
    {

        $booking = Booking::find($id);
        $booking->status = 'accepted';
        $booking->save();

        $booking->load('timing', 'mentor', 'mentee');
        $timing = $booking->timing;
        $mentor = $booking->mentor;
        $mentee = $booking->mentee;

        $start_time = $timing->start_time;
        $end_time = $timing->end_time;
        $day = $timing->day;
        $totalFees = $booking->total_fees;
        $mentorName = $mentor->fname . ' ' . $mentor->lname;
        $mentorEmail = $mentor->email;
        $menteeEmail = $mentee->email;


        $emailData = [
            'start_time' => $start_time,
            'end_time' => $end_time,
            'day' => $day,
            'totalFees' => $totalFees,
            'mentorName' => $mentorName,
            'mentorEmail' => $mentorEmail
        ];

        Mail::to($menteeEmail)->send(new BookingAccepted($emailData));

        $controller = 'App\Http\Controllers\V1\Mentor\Meeting\OnlineMeetingsController';
        $function = 'store';

        $meeting_data = [
            'start_time' => $start_time,
            'mentee_id' => $mentee->id,
            'booking_id' => $booking->id
        ];

        $onlineMeetingRequest = new OnlineMeetingRequest();

         $onlineMeetingRequest->merge($meeting_data);

        $response = App::call("$controller@$function", ['request' => $onlineMeetingRequest]);

        return $response;

        return back();
    }

    public function reject($id, Request $request)
    {
        $booking = Booking::find($id);
        $booking->status = 'rejected';
        $booking->save();


        $booking->load('timing', 'mentor', 'mentee');
        $timing = $booking->timing;
        $mentor = $booking->mentor;
        $mentee = $booking->mentee;

        $start_time = $timing->start_time;
        $end_time = $timing->end_time;
        $day = $timing->day;
        $totalFees = $booking->total_fees;
        $mentorName = $mentor->fname . ' ' . $mentor->lname;
        $mentorEmail = $mentor->email;
        $menteeEmail = $mentee->email;


        $emailData = [
            'start_time' => $start_time,
            'end_time' => $end_time,
            'day' => $day,
            'totalFees' => $totalFees,
            'mentorName' => $mentorName,
            'mentorEmail' => $mentorEmail,
            'rejectionMessage' => $request->rejection_message
        ];

        Mail::to($menteeEmail)->send(new BookingRejected($emailData));

        return back();
    }
}
