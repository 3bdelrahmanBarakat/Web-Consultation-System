<?php

namespace App\Http\Controllers\V1\Mentee\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking\Booking;
use Illuminate\Http\Request;

class BookingsListController extends Controller
{
    public function index()
    {
        $mentee_id = auth()->guard('mentee')->user()->id;

        $bookings = Booking::where('mentee_id', $mentee_id)->paginate();
        // return $bookings;

        return view('Mentee.Booking.booking-list')->with('bookings', $bookings);
    }
}
