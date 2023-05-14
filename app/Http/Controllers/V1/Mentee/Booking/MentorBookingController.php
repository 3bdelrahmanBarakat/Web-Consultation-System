<?php

namespace App\Http\Controllers\V1\Mentee\Booking;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Mentee\Booking\BookingDetailsRequest;
use App\Http\Requests\V1\Mentee\Booking\BookingTimingsRequest;
use App\Models\Booking\Booking;
use App\Models\Mentor\Mentor;
use App\Models\Mentor\Profile\MentorAbout;
use App\Models\Mentor\Profile\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe;
use Stripe\Charge;

class MentorBookingController extends Controller
{
    public function bookPlan($id)
    {
        $plans = Plan::where('mentor_id', $id)->get();
        return view('Mentee.Booking.booking_plan')->with('plans', $plans);
    }


    public function bookTimings(Request $request)
    {

        $mentor = Mentor::with('timings')->findOrFail($request->mentor_id);
        $plan = Plan::where('id', $request->plan_id)->first();
        return view('Mentee.Booking.booking_timings')->with(['mentor' => $mentor, 'plan' => $plan]);
    }
    public function storeStep1(Request $request)
    {
        $validatedData = $request->validate([
            'mentor_id' => 'required',
            'plan_id' => 'required',
            'timing_id' => 'required',
        ]);
        $request->session()->put('form.step1', $validatedData);

        return redirect()->route('mentee.booking.details');
    }

    public function bookDetails(Request $request)
    {
        return view('Mentee.Booking.booking_details');
    }

    public function storeStep2(Request $request)
    {

        $validatedData = $request->validate([
            'message1' => 'required',
            'message2' => 'required',
            'message3' => 'required',
            'message4' => 'required',
        ]);

        $formData = new Booking($request->session()->get('form.step1', []));
        $formData->fill($validatedData);
        $request->session()->put('form.step2', $validatedData);

        return redirect()->route('mentee.booking.pay');
    }

    public function bookPay(Request $request)
    {
        $step1Data = $request->session()->get('form.step1');

        $mentor_fees = Plan::where('id',$step1Data['plan_id'])->value('price');
        $mentor = Mentor::with('about')->findOrFail($step1Data['mentor_id']);


        return view('Mentee.Booking.booking_pay')->with(
            [
               'mentor' => $mentor,
               'mentor_fees' => $mentor_fees,
            ]);
    }

    public function processPayment(Request $request)
    {

        $validatedData = $request->validate([
            'total_fees' => 'required',
            'stripeToken' => 'required',
        ]);

        $formData = new Booking();
        $formData->fill($request->session()->get('form.step1', []));
        $formData->fill($request->session()->get('form.step2', []));
        $formData->fill($validatedData);
        
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        // Get payment information from form
    $amount = $request->input('amount');
    $token = $request->input('stripeToken');

    Booking::create([
        'mentor_id' => $formData['mentor_id'],
        'mentee_id' => Auth::user()->id,
        'plan_id' => $formData['plan_id'],
        'timing_id' => $formData['timing_id'],
        'total_fees' => $formData['total_fees'],
        'message1' => $formData['message1'],
        'message2' => $formData['message2'],
        'message3' => $formData['message3'],
        'message4' => $formData['message4'],
        'stripe_token' => $formData['stripeToken'],
        'status' => "pending",
    ]);

    $request->session()->forget('form');

    // Process payment with Stripe

        // $charge = Charge::create([
        //     'amount' => $amount,
        //     'currency' => 'egp',
        //     'source' => $token,
        // ]);


        return view('Mentee.Booking.booking-success');
    }
    public function checkout()
    {

    }
}
