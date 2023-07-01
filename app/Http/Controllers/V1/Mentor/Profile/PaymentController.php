<?php

namespace App\Http\Controllers\V1\Mentor\Profile;

use App\Http\Controllers\Controller;
use App\Models\Mentor\Mentor;
use App\Models\Mentor\Profile\MentorAbout;
use App\Models\Mentor\Profile\MentorPayment;
use Illuminate\Http\Request;
use Stripe\Token;

class PaymentController extends Controller
{
    public function index()
    {
        $about = MentorAbout::where('mentor_id', auth()->guard('web')->user()->id)->first();
        return view('Mentor.Profile.payment')->with([
            'about' => $about,
        ]);
    }

    public function store(Request $request)
    {
        $token = Token::create([
            'bank_account' => [
                'country' => 'US',
                'currency' => 'usd',
                'account_holder_name' => $request->input('account_holder_name'),
                'account_holder_type' => 'individual',
                'routing_number' => $request->input('routing_number'),
                'account_number' => $request->input('account_number'),
            ],
        ]);

        MentorPayment::create([
            'account_holder_name' => $token['bank_account']['account_holder_name'],
            'mentor_id' => auth()->guard('web')->user()->id,
            'stripe_token' => $token['bank_account']['id'],
            'routing_number' => $token['bank_account']['routing_number'],
            'last4' => $token['bank_account']['last4']
        ]);

        Mentor::findOrFail(auth()->guard('web')->user()->id)->update([
            'status' => "1"
        ]);

        return redirect()->route('home');
    }
}
