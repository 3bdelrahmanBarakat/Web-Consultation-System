<?php

namespace App\Http\Controllers\V1\Admin\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('mentor','mentee','timing')->paginate();
        return view('Admin.Booking.bookings')->with('bookings', $bookings);
    }
}
